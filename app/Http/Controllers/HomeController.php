<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
         return view('index');
    }

    public function product(): View
    {
        return view('product');
    }
}
