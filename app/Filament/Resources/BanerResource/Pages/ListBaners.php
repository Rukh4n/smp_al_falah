<?php

namespace App\Filament\Resources\BanerResource\Pages;

use App\Filament\Resources\BanerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaners extends ListRecords
{
    protected static string $resource = BanerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
