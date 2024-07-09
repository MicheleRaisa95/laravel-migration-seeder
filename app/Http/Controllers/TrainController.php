<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $oggi = Carbon::now()->toDateString();
        $trains = Train::whereDate('orario_partenza', $oggi)->get();
        return view('trains.index', compact('trains'));
    }
}

