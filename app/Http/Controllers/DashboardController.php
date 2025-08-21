<?php

namespace App\Http\Controllers;

use App\Models\Compani;
use Illuminate\Http\Request;
use App\Models\Tki;
use App\Models\Company;
use App\Models\Destination;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
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

        return view('admins.app', compact(
            'today',
            'thisMonth',
            'thisYear',
            'total',
            'topCompany',
            'topDestination',
            'monthlyCounts'
        ));
    }
}
