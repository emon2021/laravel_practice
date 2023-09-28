<?php

namespace App\Http\Controllers\custom_controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // hashing
    public function hashing()
    {
        return view('pages.hashing');
    }
}
