<?php

namespace App\Filament\Resources\ImageOfferResource\Pages;

use App\Filament\Resources\ImageOfferResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImageOffers extends ListRecords
{
    protected static string $resource = ImageOfferResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
