<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        return view('index');
    }
    public function detail(){
        return view('show');
    }
}
