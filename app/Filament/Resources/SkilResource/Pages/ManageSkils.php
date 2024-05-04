<?php

namespace App\Filament\Resources\SkilResource\Pages;

use App\Filament\Resources\SkilResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSkils extends ManageRecords
{
    protected static string $resource = SkilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
