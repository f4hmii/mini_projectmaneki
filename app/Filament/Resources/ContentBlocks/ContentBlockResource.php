<?php

namespace App\Filament\Resources\ContentBlocks;

use App\Filament\Resources\ContentBlocks\Pages\CreateContentBlock;
use App\Filament\Resources\ContentBlocks\Pages\EditContentBlock;
use App\Filament\Resources\ContentBlocks\Pages\ListContentBlocks;
use App\Filament\Resources\ContentBlocks\Schemas\ContentBlockForm;
use App\Filament\Resources\ContentBlocks\Tables\ContentBlocksTable;
use App\Models\ContentBlock;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ContentBlockResource extends Resource
{
    protected static ?string $model = ContentBlock::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
       return $form
        ->schema([
            Select::make('group_name')
                ->options([
                    'akses_cepat' => 'Akses Cepat (Landing Page)',
                    'misi_kami_lp' => 'Misi Kami (Landing Page)',
                    'team_member' => 'Anggota Tim (About Us)',
                    'timeline' => 'Timeline (About Us)',
                ])
                ->required()
                ->columnSpan('full')
                ->label('Kelompok Konten'),

            TextInput::make('title')->required()->maxLength(255),
            TextInput::make('extra_info')->label('Info Tambahan (Posisi/Tahun)')->nullable(),
            
            Textarea::make('description')->columnSpan('full')->nullable(),
            
            TextInput::make('icon_class')->label('Ikon FontAwesome Class (Cth: fas fa-book-open)')->nullable(),
            
            FileUpload::make('image_url')
                ->label('Gambar/Foto (Jika Anggota Tim)')
                ->image()
                ->disk('public') // Pastikan storage link sudah dibuat (php artisan storage:link)
                ->directory('content-images')
                ->columnSpan('full')
                ->nullable(),

            TextInput::make('sort_order')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return ContentBlocksTable::configure($table);
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
            'index' => ListContentBlocks::route('/'),
            'create' => CreateContentBlock::route('/create'),
            'edit' => EditContentBlock::route('/{record}/edit'),
        ];
    }
}
