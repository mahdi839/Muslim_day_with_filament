<?php

namespace App\Filament\Resources\DuaContentResource\Pages;

use App\Filament\Resources\DuaContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDuaContents extends ListRecords
{
    protected static string $resource = DuaContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
