<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function booking()
    {
        return view('booking');
    }
    public function menu()
    {
        return view('menu');
    }
    public function service()
    {
        return view('service');
    }
    public function team()
    {
        return view('team');
    }

}
