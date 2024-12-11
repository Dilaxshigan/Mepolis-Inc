<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index2() {
        return view('index2');
    }
    public function services() {
        return view('services');
    }
    public function contact() {
        return view('contact');
    }
    public function request() {
        return view('request');
    }
}
