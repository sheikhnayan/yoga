<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexView(Request $request)
    {
        return view('front.index');
    }
}
