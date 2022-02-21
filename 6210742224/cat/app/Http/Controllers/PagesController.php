<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        $services = Service::all();
        return view('Test.index', compact('main', 'services'));
    }

    public function dashboard(){
        return view('Test.dashboard');
    }

    public function main(){
        return view('Test.main');
    }
}