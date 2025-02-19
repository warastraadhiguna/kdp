<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('admin/*') || $request->is('filament/*')) {
            return $next($request); // ✅ Lewati middleware untuk admin
        }
        $ip = $request->ip();
        $today = Carbon::today()->toDateString();

        // Cek apakah IP ini sudah tercatat hari ini
        $existingVisitor = Visitor::where('ip_address', $ip)
            ->whereDate('visited_at', $today)
            ->first();

        if (!$existingVisitor) {
            // 🔍 Panggil API untuk mendapatkan lokasi berdasarkan IP
            $response = Http::get("http://ip-api.com/json/{$ip}?fields=status,country,city");

            // Jika request sukses, ambil datanya
            $locationData = $response->successful() ? $response->json() : [];

            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $request->header('User-Agent'),
                'visited_at' => $today,
                'country' => $locationData['status'] === 'success' ? $locationData['country'] : null,
                'city' => $locationData['status'] === 'success' ? $locationData['city'] : null,
            ]);
        }

        return $next($request);
    }
}
