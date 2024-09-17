<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Program;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProgramResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ProgramResource\RelationManagers;

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static ?string $navigationIcon  = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Programs';

    public static function form(Form $form): Form
    {
        $record = $form->getRecord();
        $recordId = $record ? $record->id : null;
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label(__('filament.category'))
                    ->required(),

                Forms\Components\TextInput::make('name')
                    ->label(__('filament.name'))
                    ->required()
                    ->maxLength(255)
                    ->unique()
                    ->reactive() // Trigger event when input changes
                    ->afterStateUpdated(function (?string $state, callable $set) {
                        if ($state) {
                            // Replace spaces with hyphens, but keep Arabic characters intact
                            $slug = preg_replace('/\s+/u', '-', trim($state)); // Replace spaces with hyphens
                            $slug = preg_replace('/[^\p{Arabic}\p{L}\p{N}\-]+/u', '', $slug); // Remove non-Arabic and non-alphanumeric characters, allow hyphens
                            $set('slug', $slug); // Set the generated slug
                        }
                    })
                    ->rules([
                        Rule::unique('programs', 'name')
                            ->ignore($recordId),
                    ]),

                Forms\Components\Textarea::make('slug')
                    ->label(__('filament.slug'))
                    ->unique()
                    ->required()
                    ->rules([
                        Rule::unique('programs', 'slug')
                            ->ignore($recordId),
                    ]),

                Forms\Components\Textarea::make('short_description')
                    ->label(__('filament.short_description'))
                    ->maxLength(255),

                Forms\Components\RichEditor::make('description')
                ->label(__('filament.description'))
                ->required()
                ->columnSpan('full')
                ->toolbarButtons([
                    'blockquote',
                    'bold',
                    'bulletList',
                    'h2',
                    'h3',
                    'link',
                    'orderedList',
                    'redo',
                    'underline',
                    'undo',
                ]),

                SpatieMediaLibraryFileUpload::make('image')
                    ->label(__('filament.main_image'))
                    ->required()
                    ->collection('program_main_image'),
                    // Forms\Components\TextInput::make('slug')
                    //     ->required()
                    //     ->maxLength(255),

                SpatieMediaLibraryFileUpload::make('ProgrameImages')
                    ->label(__('filament.programe_images'))
                    ->required()
                    ->collection('program_images')
                    ->reorderable()
                    ->multiple(),

                Forms\Components\TextInput::make('price')
                ->label(__('filament.price'))
                ->required()
                ->numeric()
                ->prefix('EGP'),
            ]);
            return response()->json([$table]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->defaultSort('id', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('filament.name'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('filament.category'))
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('short_description')
                //     ->label(__('filament.short_description'))
                //     ->searchable()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('description')
                //     ->searchable(),
                //     ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label(__('filament.price'))
                    ->money('EGP')
                    ->searchable()
                    ->sortable(),
                // SpatieMediaLibraryImageColumn::make('ProgrameImages')
                //     ->label(__('filament.programe_images'))
                //     ->collection('programe_images')
                //     ->size(30),
                // Tables\Columns\TextColumn::make('slug')
                //     ->searchable(),
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
            'index' => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit' => Pages\EditProgram::route('/{record}/edit'),
        ];
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.programs');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament.programs');
    }

    public static function getPluralLabel(): string
    {
        return __('filament.programs');
    }

    public static function getModelLabel(): string
    {
        return __('filament.programs');
    }

    public static function getNavigationSort(): ?int
    {
        return 2;
    }

}
