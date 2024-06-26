<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\UsersResource\Pages;

use App\Filament\Admin\Resources\UsersResource;
use Filament\Actions\CreateAction;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = UsersResource::class;

    public function getHeaderWidgetsColumns(): int|array
    {
        return [
            'default' => 5,
            'md' => 4,
            'xl' => 5,
        ];
    }

    protected function getHeaderActions(): array
    {

        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return UsersResource::getWidgets();
    }
}
