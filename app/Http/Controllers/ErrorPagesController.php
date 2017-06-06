<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorPagesController extends Controller
{
    public function accessdenied()
    {

    	return view('403');

    }
}
