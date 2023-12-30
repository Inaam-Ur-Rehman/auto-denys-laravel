<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BodyWorkResource\Pages;
use App\Filament\Resources\BodyWorkResource\RelationManagers;
use App\Models\BodyWork;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BodyWorkResource extends Resource
{
    protected static ?string $model = BodyWork::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // change model name in frotend
    protected static ?string $label = 'Type Carrosserie';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Naam')
                    ->maxLength(255)
                    ->unique(BodyWork::class, 'name', ignoreRecord: true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Naam')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListBodyWorks::route('/'),
            'create' => Pages\CreateBodyWork::route('/create'),
            'edit' => Pages\EditBodyWork::route('/{record}/edit'),
        ];
    }
}
