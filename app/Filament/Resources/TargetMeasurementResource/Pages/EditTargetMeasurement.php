<?php

namespace App\Filament\Resources\TargetMeasurementResource\Pages;

use App\Filament\Resources\TargetMeasurementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTargetMeasurement extends EditRecord
{
    protected static string $resource = TargetMeasurementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
