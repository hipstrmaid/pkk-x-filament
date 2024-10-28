<?php

namespace App\Filament\Resources\PKKResource\Pages;

use App\Filament\Resources\PKKResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePKK extends CreateRecord
{
    protected static string $resource = PKKResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
