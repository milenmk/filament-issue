<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UsersResource\RelationManagers\PreferencesRelationManager;
use App\Filament\Admin\Resources\UsersResource\Widgets\UsersStats;
use App\Models\User;
use Exception;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use STS\FilamentImpersonate\Tables\Actions\Impersonate;
use TomatoPHP\FilamentLocations\Models\City;
use TomatoPHP\FilamentLocations\Models\Country;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $slug = 'users';

    protected static ?string $navigationGroup = 'Users';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([]);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {

        return $table
            ->columns([])
            ->filters([])
            ->actions([])
            ->bulkActions([])
            ->defaultSort('created_at', 'desc')
            ->persistSortInSession()
            ->striped();
    }

    public static function getWidgets(): array
    {
        return [
            UsersStats::class,
        ];
    }

    public static function getPages(): array
    {

        return [
            'index' => UsersResource\Pages\ListUsers::route('/'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {

        return ['name', 'last_name', 'email'];
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) (static::getModel()::count());
    }
}
