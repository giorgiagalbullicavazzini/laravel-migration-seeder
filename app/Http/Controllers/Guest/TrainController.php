<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $data = 'Prova';
        return view('homepage', compact('data'));
    }
}
