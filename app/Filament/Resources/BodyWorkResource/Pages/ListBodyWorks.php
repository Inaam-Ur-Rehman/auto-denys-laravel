<?php

namespace App\Filament\Resources\BodyWorkResource\Pages;

use App\Filament\Resources\BodyWorkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBodyWorks extends ListRecords
{
    protected static string $resource = BodyWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
