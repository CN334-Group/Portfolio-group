<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('Test.index');
    }

    public function dashboard(){
        return view('Test.dashboard');
    }

    public function main(){
        return view('Test.main');
    }
}
