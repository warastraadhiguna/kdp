<?php

namespace App\Filament\Widgets;

use App\Models\Message;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Message Baru', Message::where('is_read', '0')->count())
                ->icon('heroicon-o-envelope')
                ->url(route('filament.admin.resources.messages.index')),
            Stat::make('Total Pengunjung Hari Ini', Visitor::whereDate('visited_at', Carbon::today())   ->count())
                ->icon('heroicon-o-eye')
                ->url(route('filament.admin.resources.visitors.index')),
            // Stat::make('Total Pesanan', Order::count())
            //     ->icon('heroicon-o-shopping-cart'),

            // Stat::make('Total Produk', Product::count())
            //     ->icon('heroicon-o-archive'),
        ];
    }
}
