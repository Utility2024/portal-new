<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Worksurface;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use App\Models\WorksurfaceDetail;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WorksurfaceResource\Pages;
use Filament\Infolists\Components\Card as InfolistCard;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Resources\WorksurfaceResource\RelationManagers;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;
use App\Filament\Resources\WorksurfaceResource\RelationManagers\WorksurfaceDetailRelationManager;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;

class WorksurfaceResource extends Resource
{
    protected static ?string $model = Worksurface::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationGroup = 'Data master';

    protected static ?string $recordTitleAttribute = 'register_no';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('register_no')->required()->unique(ignorable:fn($record)=>$record),
                        TextInput::make('area')->required(),
                        TextInput::make('location')->required()
                    ])
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                InfolistCard::make([
                    TextEntry::make('register_no')->label('Register No'),
                    TextEntry::make('area')->label('Area'),
                    TextEntry::make('location')->label('Location'),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('register_no')->sortable()->searchable(),
                TextColumn::make('area')->sortable()->searchable(),
                TextColumn::make('location')->sortable()->searchable(),
                TextColumn::make('qr_code')
                    ->label('QR Code')
                    ->html()
                    ->getStateUsing(function ($record) {
                        $qrCode = base64_encode(QrCode::format('svg')->size(100)->generate($record->register_no));
                        return "<img src='data:image/svg+xml;base64,{$qrCode}' alt='QR Code' />";
                    }),
                TextColumn::make('related_count')
                    ->label('Measurement count')
                    ->badge()
                    ->color('primary')
                    ->getStateUsing(function ($record) {
                        return WorksurfaceDetail::where('worksurface_id', $record->id)->count();
                    }),
                TextColumn::make('judgement_counts')
                    ->label('OK / NG Count')
                    ->badge()
                    ->getStateUsing(function ($record) {
                        $counts = $record->judgement_counts ?? ['ok' => 0, 'ng' => 0];
                        return "OK: {$counts['ok']} | NG: {$counts['ng']}";
                    })
                    ->formatStateUsing(function ($state, $record) {
                        $counts = $record->judgement_counts ?? ['ok' => 0, 'ng' => 0];
                        return "<span style='color: green;'>OK: {$counts['ok']}</span> | <span style='color: red;'>NG: {$counts['ng']}</span>";
                    })
                    ->html(),
                TextColumn::make('creator.name')
                    ->label('Created By')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updater.name')
                    ->label('Updated By')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkAction::make('Export Pdf')
                        ->icon('heroicon-m-arrow-down-tray')
                        ->openUrlInNewTab()
                        ->deselectRecordsAfterCompletion()
                        ->action(function (Collection $records) {
                            return response()->streamDownload(function () use ($records) {
                                echo Pdf::loadHTML(
                                    Blade::render('Worksurfacepdf', ['records' => $records])
                                )->stream();
                            }, 'Worksurface.pdf');
                        }),
                ExportBulkAction::make()
                    ->label('Export Excel'),
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            WorksurfaceDetailRelationManager::class,
            AuditsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorksurfaces::route('/'),
            'create' => Pages\CreateWorksurface::route('/create'),
            'view' => Pages\ViewWorksurface::route('/{record}'),
            'edit' => Pages\EditWorksurface::route('/{record}/edit'),
        ];
    }
}
