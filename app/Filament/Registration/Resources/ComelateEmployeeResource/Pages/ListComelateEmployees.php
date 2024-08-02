<?php

namespace App\Filament\Registration\Resources\ComelateEmployeeResource\Pages;

use App\Filament\Registration\Resources\ComelateEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComelateEmployees extends ListRecords
{
    protected static string $resource = ComelateEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
