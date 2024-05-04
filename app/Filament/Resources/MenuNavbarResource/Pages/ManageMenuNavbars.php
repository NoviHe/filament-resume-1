<?php

namespace App\Filament\Resources\MenuNavbarResource\Pages;

use App\Filament\Resources\MenuNavbarResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMenuNavbars extends ManageRecords
{
    protected static string $resource = MenuNavbarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
