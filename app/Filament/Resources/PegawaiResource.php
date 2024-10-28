<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pegawai;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PegawaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PegawaiResource\RelationManagers;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Data User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('nama')
                            ->required()
                            ->columnSpan('full')
                            ->options([
                                'Ny. ASRIANI, S.M' => 'Ny. ASRIANI, S.M',
                            ])
                            ->unique(ignoreRecord: true), // Makes it unique, ignoring the current record when updating
                        FileUpload::make('foto')
                            ->label('Foto Pegawai')
                            ->nullable()
                            ->disk('public') // Pastikan disk sesuai dengan konfigurasi Anda
                            ->directory('uploads/pegawai') // Folder tempat menyimpan foto
                            ->image() // Hanya mengizinkan upload gambar
                            ->maxSize(2048) // Maksimal ukuran 2MB
                            ->columnSpan('full'),

                        TextInput::make('tempat_lahir')
                            ->label('Tempat Lahir')
                            ->required()
                            ->maxLength(255),

                        DatePicker::make('tanggal_lahir')
                            ->label('Tanggal Lahir')
                            ->required(),

                        Textarea::make('alamat')
                            ->label('Alamat')
                            ->nullable()
                            ->columnSpan('full')
                            ->maxLength(500),

                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Pegawai')
                    ->searchable(), // Membuat kolom ini bisa dicari

                ImageColumn::make('foto')
                    ->disk('public') // Specify the disk where the image is stored
                    ->square(),

                TextColumn::make('tempat_lahir')
                    ->label('Tempat Lahir'),

                TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date(), // Menampilkan tanggal dalam format yang sesuai

                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->limit(50), // Membatasi tampilan alamat hingga 50 karakter
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
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }
}
