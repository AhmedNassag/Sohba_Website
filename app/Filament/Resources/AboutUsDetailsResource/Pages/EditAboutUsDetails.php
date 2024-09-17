<?php

namespace App\Filament\Resources\AboutUsDetailsResource\Pages;

use App\Filament\Resources\AboutUsDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutUsDetails extends EditRecord
{
    protected static string $resource = AboutUsDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return  $this->getResource()::getUrl('index');
    }
}
