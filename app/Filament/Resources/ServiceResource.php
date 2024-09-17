<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ServiceResource\RelationManagers;





class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon  = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Services';

    public static function form(Form $form): Form
    {
        $record = $form->getRecord();
        $recordId = $record ? $record->id : null;
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('filament.name'))  // Arabic for "Name"
                    ->required()
                    ->unique()
                    ->rules([
                        Rule::unique('services', 'name')
                            ->ignore($recordId),
                    ]),

                Textarea::make('short_description')
                    ->label(__('filament.short_description'))  // Arabic for "Short Description"
                    ->required(),

                Textarea::make('description')
                    ->label(__('filament.description'))  // Arabic for "Description"
                    ->required(),

                SpatieMediaLibraryFileUpload::make('service_image')
                    ->collection('service_image') // Collection name defined in the model
                    ->label(__('filament.Service Image'))
                    ->image() // Only allow image files
                    ->required(), // Make it required if necessary

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->defaultSort('id', 'asc')
            ->columns([
                TextColumn::make('name')->sortable()->searchable()->label(__('filament.name')),
                TextColumn::make('short_description')->sortable()->searchable()->limit(25)->label(__('filament.short_description')),
                TextColumn::make('description')->limit(50)->limit(50)->label(__('filament.description')),
                SpatieMediaLibraryImageColumn::make('service_image')
                    ->label(__('filament.Service Image'))
                    ->collection('service_image'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.Service');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament.Services');
    }

    public static function getPluralLabel(): string
    {
        return __('filament.Services');
    }

    public static function getModelLabel(): string
    {
        return __('filament.Service');
    }

    public static function getNavigationSort(): ?int
    {
        return 4;
    }
}
