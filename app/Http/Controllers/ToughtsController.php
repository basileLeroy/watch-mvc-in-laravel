<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToughtsController extends Controller
{
    public function index()
    {
        request()->validate([
            'name' => ['required'],
            'input' => ['required', 'min:10'],
        ]);
        
        return view('toughts');
    }

}
