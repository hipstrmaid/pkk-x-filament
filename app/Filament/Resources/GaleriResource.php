<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Galeri;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\GaleriResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GaleriResource\RelationManagers;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Postingan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul_galeri')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->label('Judul Galeri')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('slug')
                    ->label('Slug (Terisi Otomatis)')
                    ->readOnly()
                    ->columnSpan('full'),
                DateTimePicker::make('tanggal_galeri')
                    ->required(),
                Select::make('penulis')
                    ->required()
                    ->options([
                        'Admin' => 'Admin',
                    ]),
                FileUpload::make('gambar')
                    ->required()
                    ->label('Gambar') // Optional label
                    ->image() // Indicates that this upload is for images
                    ->disk('public') // Store on the public disk
                    ->directory('uploads/galeri') // Directory where images will be saved
                    ->required() // Optional, if you want to make the image upload mandatory
                    ->maxSize(2048) // Limit the image size to 2MB (optional)
                    ->columnSpan('full') // Adjust column span if necessary
                    ->multiple(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_galeri')
                    ->label('Judul Galeri'),
                TextColumn::make('penulis')
                    ->label('Penulis'),
                TextColumn::make('tanggal_galeri')
                    ->label('Tanggal')
                    ->dateTimeTooltip(),
                ImageColumn::make('gambar')
                    ->disk('public') // Specify the disk where the image is stored
                    ->square()

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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
