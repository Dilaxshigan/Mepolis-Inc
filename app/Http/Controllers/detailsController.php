<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class detailsController extends Controller
{
    public function about() {
        return view('details.about');
    }
    public function privacy_policy() {
        return view('details.privacy_policy');
    }
    public function FAQ() {
        return view('details.FAQ');
    }
    public function terms() {
        return view('details.terms');
    }
}
