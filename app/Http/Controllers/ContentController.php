<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function index()
    {
        return view('home');
    }
    public function about()
    {
        $nilai = rand(0,100);
         return view('contents', compact('nilai'));
    }

}
