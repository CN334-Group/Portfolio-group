<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        return view('Test.index', compact('main'));
    }

    public function dashboard(){
        return view('Test.dashboard');
    }

    public function main(){
        return view('Test.main');
    }
}