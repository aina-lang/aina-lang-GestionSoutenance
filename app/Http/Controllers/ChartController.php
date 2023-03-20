<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Chartisan\Chartisan;


class ChartController extends Controller
{
    public function index(Request $request)
    {
        $chart = Chartisan::build()
            ->labels(['First', 'Second', 'Third'])
            ->dataset('Sample', [10, 25, 50])
            ->toJSON();

        return view('chart', compact('chart'));
    }
}
