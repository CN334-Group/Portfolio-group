<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Experience;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $experiences = Experience::all();
        return view('pages.index', compact('main' ,'services', 'portfolios', 'experiences'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function main(){
        return view('pages.main');
    }
}
