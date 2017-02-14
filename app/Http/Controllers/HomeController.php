<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    public function showIndex(Request $request)
    {
        return View::make("home.index");
    }
}
