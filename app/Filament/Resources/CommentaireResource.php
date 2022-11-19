<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentaireResource\Pages;
use App\Filament\Resources\CommentaireResource\RelationManagers;
use App\Models\Commentaire;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentaireResource extends Resource
{
    protected static ?string $model = Commentaire::class;
    protected static ?string $navigationGroup = 'System Management';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?int $navigationSort = 3;

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
            'index' => Pages\ListCommentaires::route('/'),
            'create' => Pages\CreateCommentaire::route('/create'),
            'edit' => Pages\EditCommentaire::route('/{record}/edit'),
        ];
    }    
}
