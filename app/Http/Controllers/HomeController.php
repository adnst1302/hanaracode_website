<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Homepage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('homepage.homepage');
    }
}
