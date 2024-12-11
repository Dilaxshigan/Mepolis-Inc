<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class transportController extends Controller
{
    public function air_transport() {
        return view('transport.air_transport');
    }
    public function ocean_transport() {
        return view('transport.ocean_transport');
    }
    public function train_transport() {
        return view('transport.train_transport');
    }
    public function express_freight_solutions() {
        return view('transport.express_freight_solutions');
    }
}
