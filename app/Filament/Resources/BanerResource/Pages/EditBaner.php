<?php

namespace App\Filament\Resources\BanerResource\Pages;

use App\Filament\Resources\BanerResource;
use App\Models\Baner;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditBaner extends EditRecord
{
    protected static string $resource = BanerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function (Baner $record) {
                if($record->image) {
                    Storage::disk('public')->delete($record->image);
                }
            }),
        ];
    }
}
