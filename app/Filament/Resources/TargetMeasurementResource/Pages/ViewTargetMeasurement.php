<?php

namespace App\Filament\Resources\TargetMeasurementResource\Pages;

use App\Filament\Resources\TargetMeasurementResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTargetMeasurement extends ViewRecord
{
    protected static string $resource = TargetMeasurementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
