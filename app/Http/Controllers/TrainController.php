<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class TrainController extends Controller
{
    public function index()
    {
        $oggi = \Carbon\Carbon::now()->toDateString(); 
        $trains = Train::whereDate('orario_partenza', $oggi)->get();
        return view('trains.index', compact('trains'));
    }
    public function show($id)
    {
        $train = Train::findOrFail($id);
        return view('trains.show', compact('train'));
    }
}

