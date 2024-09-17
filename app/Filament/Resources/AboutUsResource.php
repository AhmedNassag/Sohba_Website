<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\AboutUs;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AboutUsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\AboutUsResource\RelationManagers;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'About Us';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('main_description')
                    ->label(__('filament.description'))
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                // Repeater::make('details')
                //     ->label(__('filament.details'))
                //     ->schema([
                //     Forms\Components\TextInput::make('title')
                //         ->label(__('filament.title'))
                //         ->required()
                //         ->maxLength(255)
                //         ->columnSpanFull(),
                //     Forms\Components\Textarea::make('description')
                //         ->label(__('filament.description'))
                //         ->required()
                //         ->maxLength(65535)
                //         ->columnSpanFull(),
                //     SpatieMediaLibraryFileUpload::make('icon')
                //         ->label(__('filament.icon'))
                //         ->required()
                //         ->collection('images'),
                //     ])->columnSpanFull()
                //     ->columns(2),
                SpatieMediaLibraryFileUpload::make('image')
                    ->label(__('filament.main_image'))
                    ->required()
                    ->collection('about_us_image'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->defaultSort('id', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('main_description')
                    ->label(__('filament.description'))
                    ->getStateUsing(fn ($record) => strip_tags($record->main_description))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    EditAction::make(),
                    ViewAction::make(),
                    DeleteAction::make(),
                ])
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
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.about_us');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament.about_us');
    }

    public static function getPluralLabel(): string
    {
        return __('filament.about_us');
    }

    public static function getModelLabel(): string
    {
        return __('filament.about_us');
    }

    public static function getNavigationSort(): ?int
    {
        return 6;
    }

    public static function canCreate(): bool
    {
        return AboutUs::count() === 0;
    }
}
