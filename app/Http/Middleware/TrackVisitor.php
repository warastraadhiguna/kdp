<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Ambil IP Address pengunjung
        $ip = $request->ip();
        $today = Carbon::today()->toDateString();

        // Cek apakah IP ini sudah tercatat hari ini
        $existingVisitor = Visitor::where('ip_address', $ip)
            ->whereDate('visited_at', $today)
            ->first();

        if (!$existingVisitor) {
            // Simpan data pengunjung baru
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $request->header('User-Agent'),
                'visited_at' => $today,
            ]);
        }

        return $next($request);
    }
}
