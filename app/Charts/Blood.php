<?php

declare(strict_types=1);

namespace App\Charts;

use App\Models\Bloodpresure;
use Chartisan\PHP\Chartisan;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\BaseChart;

class Blood extends BaseChart
{

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $bp = Bloodpresure::all()->take(15);
        return Chartisan::build()
            ->labels($bp->pluck('id')->toArray())
            ->dataset('Sample', $bp->pluck('rate')->toArray())
            ->dataset('Sample2', $bp->pluck('systolic')->toArray())
            /* ->dataset('Sample 2', [3, 2, 1]) */;
    }
}