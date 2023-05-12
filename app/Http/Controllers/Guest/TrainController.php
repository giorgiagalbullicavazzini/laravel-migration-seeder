<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use DateTime;

class TrainController extends Controller
{
    public function index() {
        //* Display all trains not departed
        $trains = Train::where('departure_time', '>', now()) -> get();
        return view('homepage', compact('trains'));
    }
}
