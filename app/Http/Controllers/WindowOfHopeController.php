<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WindowOfHope extends Controller
{
    public function index ()
    {
        $adopt = adopt::all();
        return view('adopt',compact('adopt'));
    
}
}