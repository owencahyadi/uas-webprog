<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function navbar()
    {
        return view('layout.navbar');
    }
}
