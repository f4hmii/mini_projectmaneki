<?php

namespace App\Filament\Resources\ContentBlocks\Pages;

use App\Filament\Resources\ContentBlocks\ContentBlockResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms;
use Filament\Forms\Components\Select;

class CreateContentBlock extends CreateRecord
{
    protected static string $resource = ContentBlockResource::class;

    protected function getFormSchema(): array
    {
        return [
            Select::make('group_name')
                ->options([
                    'akses_cepat' => 'Akses Cepat (Landing Page)',
                    'misi_kami_lp' => 'Misi Kami (Landing Page)',
                    'team_member' => 'Anggota Tim (About Us)',
                    'timeline' => 'Timeline (About Us)',
                ])
                ->required(),
        ];
    }
}
