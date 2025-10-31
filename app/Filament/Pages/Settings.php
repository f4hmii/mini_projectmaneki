<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page
{
    use InteractsWithForms;

    // Properti ini yang menyebabkan Fatal Error jika tipenya salah
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $title = 'Pengaturan Global Web';
    protected static ?string $slug = 'settings';
    protected static ?string $navigationGroup = 'CMS Utama';
    protected static string $view = 'filament.pages.settings';

    public array $data = [];

    public function mount(): void
    {
        // Muat data dari database, buat jika belum ada
        $this->form->fill(SiteSetting::firstOrCreate()->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('Landing Page & Hero')
                            ->schema([
                                TextInput::make('hero_title')->label('Judul Hero')->required(),
                                Textarea::make('hero_subtitle')->label('Subjudul Hero')->rows(3),
                                FileUpload::make('hero_image_url')
                                    ->label('Gambar Latar Belakang Hero')
                                    ->image()
                                    ->disk('public')
                                    ->directory('global-images')
                                    ->nullable(),
                            ]),
                        
                        Tab::make('Tentang Kami (Visi & Misi)')
                            ->schema([
                                Textarea::make('about_us_intro')->label('Teks Intro Tentang Kami')->rows(3),
                                Textarea::make('visi_text')->label('Teks Visi Kami')->rows(5),
                                Textarea::make('misi_text')->label('Teks Misi Kami')->rows(5),
                            ]),

                        Tab::make('Detail Kontak & Lokasi')
                            ->schema([
                                TextInput::make('contact_email')->label('Email Kontak'),
                                TextInput::make('contact_phone')->label('Nomor Telepon'),
                                Textarea::make('contact_address')->label('Alamat Kantor')->rows(2),
                                FileUpload::make('map_image_url')
                                    ->label('Gambar Peta Lokasi')
                                    ->image()
                                    ->disk('public')
                                    ->directory('global-images')
                                    ->nullable(),
                            ]),
                    ])
                    ->columnSpan('full'),
            ])
            ->statePath('data')
            ->model(SiteSetting::class);
    }
    
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Perubahan')
                ->submit('save')
                ->color('success'),
        ];
    }
    
    public function save(): void
    {
        // Ambil data yang sudah divalidasi dan simpan
        $data = $this->form->getState();
        
        $settings = SiteSetting::firstOrCreate();
        $settings->update($data);

        Notification::make()
            ->title('Pengaturan berhasil disimpan!')
            ->success()
            ->send();
    }
}