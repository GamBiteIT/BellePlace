<?php

namespace App\Filament\Resources\ImageOfferResource\Pages;

use App\Filament\Resources\ImageOfferResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImageOffer extends EditRecord
{
    protected static string $resource = ImageOfferResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
