<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function Main(){
        return view('pages.main');
    }
}
