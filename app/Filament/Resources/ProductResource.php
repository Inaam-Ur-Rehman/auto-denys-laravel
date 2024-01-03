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

                // widget collapseable
                Forms\Components\Section::make('Afbeeldingen')->schema([
                    Forms\Components\FileUpload::make('image')
                        ->multiple(true)
                        ->label('Afbeeldingen')->required()->image()->directory('products')->columnSpanFull(),
                ])->columnSpanFull()->collapsible(true)->collapsed(true),

                // widget collapseable technical data
                Forms\Components\Section::make('Technische gegevens')->schema([
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
                    Forms\Components\Select::make('body_work_id')->label('Type Carrosserie')->relationship('body_work', 'name')->required()->placeholder(
                        'Selecteer een type carrosserie'
                    )->searchable(),
                    Forms\Components\Select::make('emission_id')->label('Emissieklasse')->relationship('emission', 'name')->required()->placeholder('Selecteer een emissieklasse')->searchable(),
                    Forms\Components\TextInput::make('mileage')->label('Kilometerstand')->required()->currencyMask(
                        thousandSeparator: '.',
                        decimalSeparator: ',',
                        precision: 20,
                    ),
                ])->columns(2)->collapsible(true)->collapsed(true),
                Forms\Components\RichEditor::make('description')->label('Opmerkingen')->nullable()->columnSpanFull(),

                Forms\Components\Section::make('Andere opties')->schema([
                    Forms\Components\TextInput::make('price')->label('Prijs
                ')->numeric()->required()->currencyMask(
                        thousandSeparator: '.',
                        decimalSeparator: ',',
                        precision: 20,
                    ),
                    Forms\Components\TextInput::make('badge')->label('Kenteken')->required(),
                    Forms\Components\TextInput::make('horsepower')->label('Antal Pks')->required(),
                    Forms\Components\TextInput::make('kws')->label('Aantal Kws')->required(),
                    Forms\Components\TextInput::make('cylinder_capacity')->label('Cilinderinhoud')->required(),
                    Forms\Components\TextInput::make('co')->label('CO')->required(),
                    Forms\Components\TextInput::make('interior_color')->label('Interieurkleur')->required(),
                    Forms\Components\TextInput::make('exterior_color')->label('Exterieurkleur')->required(),
                    Forms\Components\TextInput::make('location')->label('Locatie')->required(),
                ])->columns(2)->collapsible(true)->collapsed(true),
                Forms\Components\Section::make('Opties')->schema([
                    Forms\Components\Repeater::make('options')
                        ->label('Opties')
                        ->required()
                        ->schema([
                            Forms\Components\TextInput::make('name')->label('Naam')->required(),
                            Forms\Components\TagsInput::make('values')->separator(',')
                                ->splitKeys(
                                    [
                                        'enter',
                                        'tab',
                                        ',',
                                    ]

                                )
                                ->placeholder('Voeg een waarde toe')
                                ->label('Waarden')->required(),
                        ])->columnSpanFull(),
                ])->columnSpanFull()->collapsible(true)->collapsed(true),
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
