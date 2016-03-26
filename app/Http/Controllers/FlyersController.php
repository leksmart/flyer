<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\FlyerRequest;

use App\Flyer;

class FlyersController extends Controller
{
    public function create()
    {
        return view('flyers.create');
    }

    public function store(FlyerRequest $request)
    {
        //validate the FORM
        // It's done with the FlyerRequest, notice it's imported at the top of this file.

        //$this->validate();
        
        //persist
        Flyer::create($request->all());

        //flash messaging 

        //redirect to landing page
        return redirect()->back();

    }
}
