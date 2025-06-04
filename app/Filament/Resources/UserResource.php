<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Пользователи';
    protected static ?string $modelLabel = 'Пользователь';
    protected static ?string $pluralModelLabel = 'Пользователи';
    protected static ?string $navigationGroup = 'Настройки';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основные данные')->schema([
                    Grid::make(3)->schema([
                        TextInput::make('name')
                            ->label('Название категории')
                            ->placeholder('Имя пользователя')
                            ->required(),
                        TextInput::make('email')
                            ->label('Электронная почта')
                            ->placeholder('Электронная почта')
                            ->required(),
                        TextInput::make('password')
                            ->label('Пароль')
                            ->revealable()
                            ->password()
                            ->required(fn(Page $livewire): bool => $livewire instanceof CreateRecord)
                            ->dehydrated(fn($state) => filled($state))
                    ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Имя пользователя')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('email')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
