<?php

namespace App\Filament\Resources;

use App\Models\PKK;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PKKResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PKKResource\RelationManagers;

class PKKResource extends Resource
{
    protected static ?string $model = PKK::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationGroup = 'Data PKK';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('sejarah_pkk')
                    ->label('Sejarah PKK')
                    ->columnSpan('full')
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                    ])
                    ->required(), // Make it required or optional as needed

                RichEditor::make('program_pokok')
                    ->label('10 Program Pokok')
                    ->columnSpan('full')
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                    ])
                    ->required(),

                RichEditor::make('arti_logo')
                    ->label('Arti dan Logo PKK')
                    ->columnSpan('full')
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                    ])
                    ->required(),

                RichEditor::make('visi_misi')
                    ->label('Visi dan Misi')
                    ->columnSpan('full')
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                    ])
                    ->required(),

                FileUpload::make('struktur_organisasi')
                    ->label('Struktur Organisasi')
                    ->columnSpan('full')
                    ->required() // Make it required or optional as needed
                    ->disk('public') // Specify the disk where the image will be stored
                    ->directory('uploads/struktur_organisasi') // Specify the directory
                    ->image() // Optional: Only allow image uploads
                    ->maxSize(2048), // Optional: Limit the image size to 2MB

                RichEditor::make('mars_pkk')
                    ->label('Mars PKK')
                    ->columnSpan('full')
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sejarah_pkk')
                    ->label('Sejarah')
                    ->wrap()
                    ->html()
                    ->limit(50),
                TextColumn::make('program_pokok')
                    ->label('10 Program  Pokok')
                    ->wrap()
                    ->html()
                    ->limit(50),
                TextColumn::make('arti_logo')
                    ->label('Arti & Logo')
                    ->wrap()
                    ->html()
                    ->limit(50),
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
            'index' => Pages\ListPKKS::route('/'),
            'create' => Pages\CreatePKK::route('/create'),
            'edit' => Pages\EditPKK::route('/{record}/edit'),
        ];
    }
}
