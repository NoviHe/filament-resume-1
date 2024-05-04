<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use App\Models\ProjectCategory;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->columnSpanFull(),
                TextInput::make('slug')->required()->columnSpan(1),
                Select::make('project_category_id')->label('Category')->options(ProjectCategory::all()->pluck('name', 'id'))->columnSpan(1),
                FileUpload::make('thumbnail')->required()->image()->disk('public')->directory('project')->columnSpanFull(),
                TextInput::make('client')->columnSpan(1),
                TextInput::make('url')->columnSpan(1),
                RichEditor::make('content')->columnSpanFull(),
                TagsInput::make('tags')->required()->columnSpan(1),
                DatePicker::make('date')->label('Project Date')->required()->columnSpan(1),
                Checkbox::make('published')->required()->columnSpanFull(),
                FileUpload::make('images')->label("Project Images")->image()->multiple()->disk('public')->directory('project')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail'),
                TextColumn::make('title'),
                TextColumn::make('category.name'),
                TextColumn::make('tags'),
                CheckboxColumn::make('published'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(function (Collection $record) {
                        foreach ($record as $key => $value) {
                            if ($value->thumbnail) {
                                Storage::disk('public')->delete($value->thumbnail);
                            }
                            if ($value->images) {
                                foreach ($value->images as $keyImage => $valueImage) {
                                    Storage::disk('public')->delete($valueImage);
                                }
                            }
                        }
                    }),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
