<?php

namespace App\Filament\Resources\EmissionResource\Pages;

use App\Filament\Resources\EmissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmissions extends ListRecords
{
    protected static string $resource = EmissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
