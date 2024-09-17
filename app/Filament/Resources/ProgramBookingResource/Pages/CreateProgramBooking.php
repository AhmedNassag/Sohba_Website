<?php

namespace App\Filament\Resources\ProgramBookingResource\Pages;

use App\Filament\Resources\ProgramBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProgramBooking extends CreateRecord
{
    protected static string $resource = ProgramBookingResource::class;

    protected function getRedirectUrl(): string
    {
        return  $this->getResource()::getUrl('index');
    }
}
