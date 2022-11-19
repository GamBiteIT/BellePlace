<?php

namespace App\Filament\Widgets;

use App\Models\Offer;
use App\Models\Partner;
use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Users',User::all()->count()),
            Card::make('Posts',Post::all()->count()),
            Card::make('Partners',Partner::all()->count()),
            Card::make('Offers',Offer::all()->count()),
            
            
        ];
    }
}
