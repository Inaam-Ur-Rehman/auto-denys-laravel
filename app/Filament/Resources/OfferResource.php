<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferResource\Pages;
use App\Filament\Resources\OfferResource\RelationManagers;
use App\Models\Offers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OfferResource extends Resource
{
    protected static ?string $model = Offers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Aanbiedingen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('merk')
                    ->autofocus()
                    ->required()
                    ->placeholder('Merk'),
                Forms\Components\TextInput::make('model')
                    ->required()
                    ->placeholder('Model'),
                Forms\Components\TextInput::make('brandstof')
                    ->required()
                    ->placeholder('Brandstof'),
                Forms\Components\TextInput::make('bouwjaar')
                    ->required()
                    ->placeholder('Bouwjaar'),
                Forms\Components\TextInput::make('telefoonnummer')
                    ->placeholder('Telefoonnummer'),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->placeholder('Email'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('merk')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brandstof')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bouwjaar')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('telefoonnummer')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('is_replied')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffer::route('/create'),
            'edit' => Pages\EditOffer::route('/{record}/edit'),
        ];
    }
}
