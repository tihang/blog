<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();

        return view('service.index', compact('service'));
    }

    public function store()
    {   
        $data = request()->validate([
            'name' => 'required | min:5' 
        ]);
    
        Service::create($data);
        return redirect()->back();
    }
}
