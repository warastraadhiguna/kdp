<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\DashboardStats;
use App\Models\User;

class DashboardCustom extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static string $view = 'filament.pages.dashboard-custom'; // ✅ Pastikan ada view
    public static function shouldRegisterNavigation(): bool
    {
        return true; // ✅ Munculkan di sidebar
    }
    protected function getHeaderWidgets(): array
    {
        return [
            DashboardStats::class, // ✅ Tambahkan widget statistik
        ];
    }

    public function getTitle(): string
    {
        return 'Dashboard'; // 🔥 Judul halaman
    }

    public function getViewData(): array
    {
        return [
            'user_count' => User::count(),
        ];
    }
}
