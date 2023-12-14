<?php

// app/Http/Controllers/ChartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
use App\Models\Post;
use App\Models\Product;

class ChartController extends Controller
{
    public function showCharts()
    {
        $postChartData = Post::all()->countBy('category');

        $productChartData = Product::all()->pluck('name', 'price');

        $pieChart = Charts::create('pie', 'chartjs')
            ->title('Post Categories')
            ->labels($postChartData->keys())
            ->values($postChartData->values())
            ->dimensions(400, 300);

        $areaChart = Charts::create('area', 'chartjs')
            ->title('Product Prices')
            ->labels($productChartData->keys())
            ->values($productChartData->values())
            ->dimensions(400, 300);

        return view('charts.show', ['pieChart' => $pieChart, 'areaChart' => $areaChart]);
    }
}
