<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kegiatan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\KegiatanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KegiatanResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class KegiatanResource extends Resource
{
    protected static ?string $model = Kegiatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Postingan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_kegiatan')
                            ->label('Judul Kegiatan')
                            ->columnSpan('full'),
                        TextInput::make('dihadiri_oleh')
                            ->label('Dihadiri Oleh')
                            ->columnSpan('full'),
                        DatePicker::make('tanggal')
                            ->label('Tanggal')
                            ->required(),
                        TimePicker::make('waktu')
                            ->label('Jam')
                            ->required(),
                        TextInput::make('lokasi')
                            ->label('Tempat Kegiatan')
                            ->columnSpan('full'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('row_number')
                    ->label('No')
                    ->sortable(false)
                    ->formatStateUsing(fn($record, $livewire) => ($livewire->getTableRecordIndex($record) + 1)),
                TextColumn::make('nama_kegiatan')
                    ->label('Judul Kegiatan')
                    ->wrap()
                    ->limit(50)
                    ->searchable() // Membuat kolom ini bisa dicari
                    ->sortable(),
                TextColumn::make('dihadiri_oleh')
                    ->label('Dihadiri Oleh')
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date(),
                TextColumn::make('waktu')
                    ->label('Jam')
                    ->time(),
                TextColumn::make('lokasi')
                    ->label('Tempat Kegiatan')
                    ->wrap()
                    ->sortable(),
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
            'index' => Pages\ListKegiatans::route('/'),
            'create' => Pages\CreateKegiatan::route('/create'),
            'edit' => Pages\EditKegiatan::route('/{record}/edit'),
        ];
    }
}
