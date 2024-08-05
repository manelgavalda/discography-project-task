<?php

namespace App\Filament\Resources\LPResource\Pages;

use App\Filament\Resources\LPResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLP extends EditRecord
{
    protected static string $resource = LPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
