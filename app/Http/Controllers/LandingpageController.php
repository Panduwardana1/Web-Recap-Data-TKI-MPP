<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingpage(Request $request) {
        return view('landingpage');
    }
}
