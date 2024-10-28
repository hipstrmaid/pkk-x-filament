<?php

namespace App\Filament\Resources\PKKResource\Pages;

use App\Filament\Resources\PKKResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPKKS extends ListRecords
{
    protected static string $resource = PKKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
