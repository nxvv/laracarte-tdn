<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('home');
    }

    function about(){
        return view('about');
    }
}
