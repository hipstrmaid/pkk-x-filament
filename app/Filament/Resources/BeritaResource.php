<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Postingan';

    public static function form(Form $form): Form
    {
        return $form
            ->columns([
                'sm' => 3,
                'xl' => 6,
                '2xl' => 8,
            ])
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('judul_berita')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->label('Judul Berita')
                            ->required()
                            ->columnSpan('full'),

                        TextInput::make('slug')
                            ->label('Slug (Terisi Otomatis)')
                            ->readOnly()
                            ->columnSpan('full'),

                        Select::make('penulis')
                            ->required()
                            ->options([
                                'Admin' => 'Admin',
                            ]),

                        DateTimePicker::make('tanggal_publish')
                            ->required(),

                        RichEditor::make('isi_berita') // Use RichEditor for rich text
                            ->label('Isi berita')
                            ->required(),

                        FileUpload::make('thumbnail_berita')
                            ->required()
                            ->label('Thumbnail') // Optional label
                            ->image() // Indicates that this upload is for images
                            ->disk('public') // Store on the public disk
                            ->directory('uploads/berita') // Directory where images will be saved
                            ->required() // Optional, if you want to make the image upload mandatory
                            ->maxSize(2048) // Limit the image size to 2MB (optional)
                            ->columnSpan('full'), // Adjust column span if necessary
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_berita'),
                TextColumn::make('penulis'),
                TextColumn::make('tanggal_publish')
                    ->since()
                    ->dateTimeTooltip(),
                ImageColumn::make('thumbnail_berita')
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
