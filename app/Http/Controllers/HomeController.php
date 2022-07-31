<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function clubs()
    {
        return view('pages.clubs');
    }

    public function players()
    {
        return view('pages.players');
    }

    public function managers()
    {
        return view('pages.managers');
    }

    public function stadiums()
    {
        return view('pages.stadiums');
    }
}
