<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class Pagecontroller extends Controller
{
    public function index(){
        $main = Main::first();
        return view('pages.index', compact('main'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function Main(){
        return view('pages.main');
    }
}
