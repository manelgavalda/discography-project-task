<?php

namespace App\Filament\Resources\LPResource\Pages;

use Filament\Actions;
use App\Filament\Resources\LPResource;
use Filament\Resources\Pages\ListRecords;

class ListLPS extends ListRecords
{
    protected static string $resource = LPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
