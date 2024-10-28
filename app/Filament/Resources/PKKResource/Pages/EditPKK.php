<?php

namespace App\Filament\Resources\PKKResource\Pages;

use App\Filament\Resources\PKKResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPKK extends EditRecord
{
    protected static string $resource = PKKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
