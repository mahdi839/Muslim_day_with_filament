<?php

namespace App\Filament\Resources\RowResource\Pages;

use App\Filament\Resources\RowResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRow extends EditRecord
{
    protected static string $resource = RowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
