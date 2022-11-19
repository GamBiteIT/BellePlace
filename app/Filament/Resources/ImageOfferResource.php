<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageOfferResource\Pages;
use App\Filament\Resources\ImageOfferResource\RelationManagers;
use App\Models\ImageOffer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImageOfferResource extends Resource
{
    protected static ?string $model = ImageOffer::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';
    protected static ?string $navigationGroup = 'Image Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImageOffers::route('/'),
            'create' => Pages\CreateImageOffer::route('/create'),
            'edit' => Pages\EditImageOffer::route('/{record}/edit'),
        ];
    }    
}
