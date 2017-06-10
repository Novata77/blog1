<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubliController extends Controller
{
    public function index()
    {
    	return view('publi.indexp');
    	//return view('publi/index');
    }

    public function show($id)
    {
    	return view('publi.showp');
    }
}
