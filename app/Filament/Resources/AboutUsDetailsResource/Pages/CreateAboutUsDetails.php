<?php

namespace App\Filament\Resources\AboutUsDetailsResource\Pages;

use App\Filament\Resources\AboutUsDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutUsDetails extends CreateRecord
{
    protected static string $resource = AboutUsDetailsResource::class;

    protected function getRedirectUrl(): string
    {
        return  $this->getResource()::getUrl('index');
    }
}
