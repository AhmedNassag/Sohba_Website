<?php

namespace App\Filament\Resources\AboutUsDetailsResource\Pages;

use App\Filament\Resources\AboutUsDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutUsDetails extends ListRecords
{
    protected static string $resource = AboutUsDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
