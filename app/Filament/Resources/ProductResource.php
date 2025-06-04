<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Notifications\Notification;
use App\Models\Category;
use Filament\Forms\Components\RichEditor;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-swatch';
    protected static ?string $navigationLabel = 'Врачи';
    protected static ?string $modelLabel = 'Врачи';
    protected static ?string $pluralModelLabel = 'Врачи';
    protected static ?string $navigationGroup = 'Ординатура';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основные данные')->schema([
                    Grid::make(2)->schema([
                        TextInput::make('name')
                            ->label('Название товара')
                            ->placeholder('Название')
                            ->maxLength(255)
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Set $set, $state) {
                                $set('product_slug', Str::slug($state));
                            }),
                        TextInput::make('product_slug')
                            ->label('URL')
                            ->placeholder('URL')
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->disabled()
                            ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true)
                            ->required(),
                        TextInput::make('price')
                            ->label('Цена')
                            ->placeholder('Цена')
                            ->suffix('₽')
                            ->required(),
                        Select::make('category_id')
                            ->label('Категория')
                            ->relationship('category', 'name')
                            ->placeholder('Выбрать категорию')
                            ->preload()
                            ->native(false)
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->label('Название категории')
                                    ->maxLength(255)
                                    ->placeholder('Название категории')
                                    ->required(),
                                TextInput::make('product_slug')
                                    ->label('URL категории')
                                    ->maxLength(255)
                                    ->placeholder('URL категории')
                                    ->suffixIcon('heroicon-m-globe-alt')
                                    ->required(),
                                Toggle::make('is_active')
                                    ->label('Отключена / Включена')
                                    ->default(true)
                                    ->required(),
                            ])
                            ->required(),
                    ]),
                    TextArea::make('description')
                        ->label('Описание')
                        ->autosize()
                        ->placeholder('Описание')
                        ->required(),
                    RichEditor::make('long_description')
                        ->label('Развернутое описание')
                        ->placeholder('Развернутое описание')
                        ->fileAttachmentsDirectory('products')
                        ->required(),
                    Section::make('Медиа и изображения')->schema([
                        FileUpload::make('image')
                            ->label('Изображение')
                            ->image()
                            ->directory('products')
                            ->required(),
                    ]),
                ]),
                Section::make('Видимость товара')->schema([
                    Toggle::make('is_active')
                        ->label('Отключена / Включена')
                        ->default(true)
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Изображение'),
                TextColumn::make('name')
                    ->label('Название')
                    ->searchable(),
                TextColumn::make('price')
                    ->label('Цена')
                    ->money('RUB'),
                TextColumn::make('product_slug')
                    ->label('URL'),
                TextColumn::make('category.name')
                    ->label('Категория')
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Статус')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
                    ->successNotification(
                        Notification::make()
                            ->success()
                            ->title('Уведомление')
                            ->body('Товар был успешно удален!')
                    )
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
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

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function categoryOptions()
    {
        return Category::pluck('name', 'id');
    }
}
