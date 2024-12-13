<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Contact;

class homeController extends Controller
{
    public function index2() {
        return view('index2');
    }
    public function store_request(Request $request)
    {
        $request->validate([
            'name'=>'required|min:4|max:240',
            'email'=>'required|email',
            'phone'=>'required|regex:/^\+?\d{10,11}$/',
            'weight' => 'required|integer',
            'length' => 'required|integer',
            'height' => 'required|integer',
            'message' => 'required'
        ]);

        $data = new Customer;

        $data->Customer_id = $request->Customer_id;  
        $data->name = $request->name;
        $data->email = $request->email;  
        $data->phone = $request->phone;
        $data->weight = $request->weight;
        $data->length = $request->length;
        $data->height = $request->height;
        $data->message = $request->message;  
    
        $data->save();

        return redirect()->back()->with('message', 'Your request has been successfully sent...');
    }
    public function services() {
        return view('services');
    }
    public function contact() {
        return view('contact');
    }
    public function store_info(Request $request)
    {
        $request->validate([
            'name'=>'required|min:4|max:240',
            'email'=>'required|email',
            'text'=>'required',
            'message' => 'required'
        ]);

        $data = new Contact;

        $data->Customer_id = $request->Customer_id;  
        $data->name = $request->name;  
        $data->email = $request->email;
        $data->text = $request->text;
        $data->message = $request->message;  
    
        $data->save();

        return redirect()->back()->with('message', 'Your message has been successfully sent...');

    }
    public function request() {
        return view('request');
    }
}
