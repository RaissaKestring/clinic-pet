<?php

namespace App\Filament\Resources\OwnerResource\Pages;

use App\Filament\Resources\OwnerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOwner extends EditRecord
{
    protected static string $resource = OwnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function gerRedirectUrl(): ?string {
        
        return $this->getResource()::getUrl('index');

    }
}
