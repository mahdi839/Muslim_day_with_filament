<?php

namespace App\Filament\Resources\RowResource\Pages;

use App\Filament\Resources\RowResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRows extends ListRecords
{
    protected static string $resource = RowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
