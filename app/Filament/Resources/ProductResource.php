<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Wagens';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Naam')
                    ->maxLength(255)->afterStateUpdated(
                        function (string $operation, $state, Forms\Set $set) {
                            if ($operation === "edit") {
                                return;
                            }
                            $set("slug", Str::slug($state));
                        }
                    )->debounce(2000),
                Forms\Components\TextInput::make('slug')->label('URL')->unique(Product::class, 'slug', ignoreRecord: true)->required()->helperText('
                Dit wordt automatisch gegenereerd als het leeg wordt gelaten.'),
                Forms\Components\RichEditor::make('description')->label('Beschrijving')->nullable()->columnSpanFull(),
                Forms\Components\FileUpload::make('image')->label('Afbeelding')->required()->image()->directory('products')->columnSpanFull(),
                Forms\Components\TextInput::make('price')->label('Prijs
                ')->numeric()->required()->currencyMask(
                    thousandSeparator: '.',
                    decimalSeparator: ',',
                    precision: 20,
                ),
                Forms\Components\Select::make('company_id')->label('Merk')->relationship('company', 'name')->required()->placeholder('Selecteer een merk')->searchable(),
                Forms\Components\TextInput::make('year')->label('Productiejaar')->required(),
                Forms\Components\Select::make('transmission')->required()->label('Transmissie')->options([
                    'automatisch' => 'Automatisch',
                    'manueel' => 'Manueel',
                ]),
                Forms\Components\Select::make('fuel')->label('Brandstof')->options([
                    'benzine' => 'Benzine',
                    'diesel' => 'Diesel',
                    'elektrisch' => 'Elektrisch',
                    'hybride' => 'Hybride',
                ])->required(),
                Forms\Components\TextInput::make('engine')->label('Motor')->required(),
                Forms\Components\TextInput::make('badge')->label('Kenteken')->required(),
                Forms\Components\Select::make('body_work_id')->label('Type Carrosserie')->relationship('body_work', 'name')->required()->placeholder(
                    'Selecteer een type carrosserie'
                )->searchable(),
                Forms\Components\Select::make('emission_id')->label('Emissieklasse')->relationship('emission', 'name')->required()->placeholder('Selecteer een emissieklasse')->searchable(),
                Forms\Components\TextInput::make('mileage')->label('Kilometerstand')->required()->currencyMask(
                    thousandSeparator: '.',
                    decimalSeparator: ',',
                    precision: 20,
                ),

                Forms\Components\Section::make('Controls')->schema([
                    Forms\Components\Checkbox::make('is_available'),
                    Forms\Components\Checkbox::make('published'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('company.name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('price')->searchable()->sortable()->currency('EUR'),
                Tables\Columns\TextColumn::make('year')->searchable()->sortable(),
                Tables\Columns\BooleanColumn::make('published')->label('Published?')->sortable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
