<?php

namespace App\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;            // <- PENTING: gunakan Page (bukan Pages)
use Filament\Actions\Action;
use UnitEnum;
use BackedEnum;

class Settings extends Page
{
    use InteractsWithForms;

    // Untuk Filament v3.x tipe properti icon/group bisa enum atau string
    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static UnitEnum|string|null $navigationGroup = 'CMS Utama';

    // slug / label / title tetap static string
    protected static ?string $slug = 'settings';
    protected static ?string $title = 'Pengaturan Global Web';
    protected static ?string $navigationLabel = 'Settings';

    // PENTING: $view tidak boleh static (parent mendeklarasikan non-static)
    protected string $view = 'filament.pages.settings';

    // contoh data untuk form
    public array $data = [];

    public function mount(): void
    {
        // inisialisasi data jika diperlukan
        $this->data = [
            // 'site_name' => config('app.name'),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            // contoh field
            // Forms\Components\TextInput::make('site_name')->label('Site Name'),
        ];
    }

    public function save()
    {
        // contoh action save
        Notification::make()
            ->title('Pengaturan disimpan')
            ->success()
            ->send();
    }
}
