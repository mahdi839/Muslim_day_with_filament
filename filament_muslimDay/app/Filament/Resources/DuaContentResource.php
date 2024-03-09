<?php

namespace App\Filament\Resources;


use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\DuaContentResource\Pages;
use App\Filament\Resources\DuaContentResource\RelationManagers;
use App\Models\DuaCategory;
use App\Models\DuaContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Actions\ExportTableAction;

class DuaContentResource extends Resource
{
    protected static ?string $model = DuaContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        $options = DuaCategory::all()->pluck('title_bn', 'id');

        return $form
            ->schema([
                Select::make('dua_category_id')
                    ->label('Category')
                    ->options($options),

                TextInput::make('dua_item_title_bn'),
                TextInput::make('subtitle_bn'),

                // Textarea::make('dua_item_row_html'),

                TextInput::make('sanad_bn'),

                TextInput::make('matan_bn'),
                TextInput::make('arabic_dua'),

                TextInput::make('translation_bn'),

                TextInput::make('reference_bn'),
                TextInput::make('explanation'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('dua_category_id'),
                TextColumn::make('dua_item_title_bn'),
                TextColumn::make('subtitle_bn'),
                TextColumn::make('sanad_bn'),
                TextColumn::make('matan_bn'),
                TextColumn::make('arabic_dua'),
                TextColumn::make('translation_bn'),
                TextColumn::make('reference_bn'),
                TextColumn::make('explanation')
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
            'index' => Pages\ListDuaContents::route('/'),
            'create' => Pages\CreateDuaContent::route('/create'),
            'edit' => Pages\EditDuaContent::route('/{record}/edit'),
        ];
    }
}
