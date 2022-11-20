<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\ImageOffer;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\ImageOfferResource\Pages;


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
                TextColumn::make('offer_id')->label('Offer ID'),
                TextColumn::make('partnerid')->label('Partner ID'),
                TextColumn::make('image')->label('Path Of Image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
