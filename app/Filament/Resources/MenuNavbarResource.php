<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuNavbarResource\Pages;
use App\Filament\Resources\MenuNavbarResource\RelationManagers;
use App\Models\MenuNavbar;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuNavbarResource extends Resource
{
    protected static ?string $model = MenuNavbar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('icon')->required(),
                TextInput::make('slug')->required(),
                TextInput::make('ordered')->numeric()->required(),
                Checkbox::make('visibility')->label('Visibility Menu'),
                Checkbox::make('visibility_section'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('icon'),
                TextColumn::make('slug'),
                TextColumn::make('ordered'),
                CheckboxColumn::make('visibility')->label('Visibility Menu'),
                CheckboxColumn::make('visibility_section'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('ordered');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMenuNavbars::route('/'),
        ];
    }
}
