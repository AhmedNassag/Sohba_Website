<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Validation\Rule;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryResource\RelationManagers;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon  = 'heroicon-o-adjustments-vertical';
    protected static ?string $navigationGroup = 'Categories';

    public static function form(Form $form): Form
    {
        $record = $form->getRecord();
        $recordId = $record ? $record->id : null;
        return $form
            ->schema([
                TextInput::make('name')
                ->label(__('filament.name'))
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->reactive()
                    ->live(onBlur:true)
                    ->afterStateUpdated(function (?string $state, callable $set) {
                        if ($state) {
                            // Replace spaces with hyphens, but keep Arabic characters intact
                            $slug = preg_replace('/\s+/u', '-', trim($state)); // Replace spaces with hyphens
                            $slug = preg_replace('/[^\p{Arabic}\p{L}\p{N}\-]+/u', '', $slug); // Remove non-Arabic and non-alphanumeric characters, allow hyphens
                            $set('slug', $slug); // Set the generated slug
                        }
                    }),

                Forms\Components\TextInput::make('slug')
                    ->label(__('filament.slug'))
                    ->unique()
                    ->required()
                    ->rules([
                        Rule::unique('categories', 'slug')
                            ->ignore($recordId),
                    ]),

                Select::make('parent_id')
                    ->label(__('filament.category'))
                    ->options(function () {
                        return Category::pluck('name', 'id');
                    })
                    ->nullable()
                    ->preload()      // Preloads the options for direct viewing
                    ->searchable(),   // Adds the searchable functionality
                // Forms\Components\TextInput::make('order')
                //     ->label(__('filament.order'))
                //     ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('order')
        ->defaultSort('order', 'asc')
            ->columns([
                // Tables\Columns\TextColumn::make('order')
                //     ->label(__('filament.order'))
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('filament.name'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('filament.Slug'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('parent.name')
                    ->label(__('filament.Category'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->searchable()
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.categories');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament.categories');
    }

    public static function getPluralLabel(): string
    {
        return __('filament.categories');
    }

    public static function getModelLabel(): string
    {
        return __('filament.categories');
    }

    public static function getNavigationSort(): ?int
    {
        return 1;
    }

}
