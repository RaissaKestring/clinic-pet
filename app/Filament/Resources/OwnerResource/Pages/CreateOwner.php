<?php

namespace App\Filament\Resources\OwnerResource\Pages;

use App\Filament\Resources\OwnerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Relations\HasMany;
use app\Models\Owner;

class CreateOwner extends CreateRecord
{
    protected static string $resource = OwnerResource::class;

    protected function gerRedirectUrl(): string {
        
        return $this->getResource()::getUrl('index');

    }
}
