<?php

namespace App\Filament\Resources\LinkSocialResource\Pages;

use App\Filament\Resources\LinkSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLinkSocials extends ManageRecords
{
    protected static string $resource = LinkSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
