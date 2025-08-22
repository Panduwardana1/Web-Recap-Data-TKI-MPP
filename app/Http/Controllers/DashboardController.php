<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tki;
use App\Models\Compani;
use App\Models\Destination;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // todo Statistik jumlah TKI
        $today = Tki::whereDate('created_at', Carbon::today())->count();

        $thisMonth = Tki::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        $thisYear = Tki::whereYear('created_at', Carbon::now()->year)->count();
        $total = Tki::count();

        // todo PT dengan jumlah TKI terbanyak
        $topCompany = Compani::withCount('tki')
            ->orderByDesc('tki_count')
            ->first();

        // todo Negara tujuan terbanyak
        $topDestination = Destination::withCount('tki')
            ->orderByDesc('tki_count')
            ->first();

        // todo Data untuk chart (contoh bulanan)
        $monthlyData = Tki::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('month')
            ->pluck('total', 'month');

        $monthlyCounts = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlyCounts[$i] = $monthlyData[$i] ?? 0;
        }

        $totalTki = Tki::count();

        $mele = Tki::where('gender', 'L')->count();
        $famele = Tki::where('gender', 'P')->count();

        return view('admins.app', compact(
            'today',
            'thisMonth',
            'thisYear',
            'total',
            'topCompany',
            'topDestination',
            'monthlyCounts',
            'totalTki',
            'mele',
            'famele',
        ));
    }
}
