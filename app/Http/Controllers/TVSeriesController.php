<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class TVSeriesController extends Controller
{
    public function _construct()
    {
    }

    public function index()
    {
        // query with join for tv shows and their listings
        $tv_listings = DB::table('tvseries')
            ->select('*')
            ->join('tvseriesintervals', 'tvseriesintervals.id_tv_series', '=', 'tvseries.id')
            ->get();

        // return data to view
        return view('tvlistings', ['tv_listings' => $tv_listings]);
    }
}
