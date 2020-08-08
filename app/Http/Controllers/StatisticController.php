<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\StatisticService;

class StatisticController extends Controller
{
    public function __construct(StatisticService $statisticService){
		$this->statisticService = $statisticService;
    }

    public function view()
    {
    	return view('pages.viewStatistic');
    }

    public function statisticOrder(Request $req)
    {
    	$orders = $this->statisticService->getStatisticOrder($req);
    	if($orders == null) {
    		return response()->json(['orders' => null]);
    	} else {
    		return response()->json(['orders' => $orders]);
    	}
    }
}
