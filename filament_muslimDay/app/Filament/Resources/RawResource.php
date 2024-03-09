<?php

namespace App\Filament\Resources;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
use App\Filament\Resources\RawResource\Pages;
use App\Filament\Resources\RawResource\RelationManagers;
use App\Models\Raw;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RawResource extends Resource
{
    protected static ?string $model = Raw::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('dua_item_row_html')
                    ->required()
                    ->label('Raw HTML'),
            ]);
        return back();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('dua_item_row_html')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRaws::route('/'),
            'create' => Pages\CreateRaw::route('/create'),
            'edit' => Pages\EditRaw::route('/{record}/edit'),
        ];
    }
}
