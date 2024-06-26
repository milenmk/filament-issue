<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\UsersResource\Widgets;

use App\Filament\Admin\Resources\UsersResource\Pages\ListUsers;
use App\Models\User;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersStats extends BaseWidget
{
    use InteractsWithPageTable;

    protected static ?string $pollingInterval = null;

    protected function getTablePage(): string
    {
        return ListUsers::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('total_users', User::count())->label(__('Total Users')),
            Stat::make('total_users', User::count())->label(__('Total Users')),
            Stat::make('total_users', User::count())->label(__('Total Users')),
            Stat::make('total_users', User::count())->label(__('Total Users')),
            Stat::make('total_users', User::count())->label(__('Total Users')),
        ];
    }
}
