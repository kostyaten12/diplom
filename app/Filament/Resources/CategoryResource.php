<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Notifications\Notification;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;
    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationLabel = 'Специлизация';
    protected static ?string $modelLabel = 'Специлизация';
    protected static ?string $pluralModelLabel = 'Специлизация';
    protected static ?string $navigationGroup = 'Ординатура';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основные данные')->schema([
                    Grid::make(2)->schema([
                        TextInput::make('name')
                            ->label('Название категории')
                            ->placeholder('Категория')
                            ->maxLength(255)
                            ->required(),
                        TextInput::make('category_slug')
                            ->label('URL категории')
                            ->maxLength(255)
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->placeholder('URL')
                            ->required(),
                    ]),
                    TextArea::make('description')
                            ->label('Описание')
                            ->autosize()
                            ->placeholder('Описание')
                            ->required(),
                    Section::make('Медиа и изображения')->schema([
                        FileUpload::make('image')
                            ->label('Изображение')
                            ->image()
                            ->directory('categories')
                            ->required(),
                    ]),
                ]),
                Section::make('Видимость категории')->schema([
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
                    ->label('Название категории')
                    ->searchable(),
                TextColumn::make('category_slug')
                    ->label('URL')
                    ->searchable(),
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
                            ->body('Категория была успешно удалена!')
                    ),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
