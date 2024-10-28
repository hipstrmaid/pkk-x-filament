<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Kelompok;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KelompokResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KelompokResource\RelationManagers;

class KelompokResource extends Resource
{
    protected static ?string $model = Kelompok::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data PKK';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('nama_kelompok')
                            ->label('Nama Kelompok')
                            ->required()
                            ->options([
                                'Sekretariat' => 'Sekretariat',
                                'Pokja I' => 'Pokja I',
                                'Pokja II' => 'Pokja II',
                                'Pokja III' => 'Pokja III',
                                'Pokja IV' => 'Pokja IV',
                            ])
                            ->unique(ignoreRecord: true), // Makes it unique, ignoring the current record when updating


                        FileUpload::make('gambar')
                            ->required()
                            ->label('Foto Ketua') // Optional label
                            ->image() // Indicates that this upload is for images
                            ->disk('public') // Store on the public disk
                            ->directory('uploads/kelompok')
                            ->required()
                            ->maxSize(2048)
                            ->columnSpan('full'),
                        RichEditor::make('misi')
                            ->label('Misi')
                            ->required(),
                        RichEditor::make('program_pokok')
                            ->label('Program Pokok')
                            ->required(),
                        RichEditor::make('program_unggulan')
                            ->label('Program Unggulan')
                            ->required(),
                        RichEditor::make('program_prioritas')
                            ->label('Program Prioritas')
                            ->required(),
                        RichEditor::make('kelompok_kegiatan')
                            ->label('Kelompok Kegiatan')
                            ->required(),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kelompok')
                    ->label('Nama Kelompok'),
                ImageColumn::make('gambar')
                    ->disk('public') // Specify the disk where the image is stored
                    ->square()
                    ->label('Ketua Kelompok')
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
            'index' => Pages\ListKelompoks::route('/'),
            'create' => Pages\CreateKelompok::route('/create'),
            'edit' => Pages\EditKelompok::route('/{record}/edit'),
        ];
    }
}
