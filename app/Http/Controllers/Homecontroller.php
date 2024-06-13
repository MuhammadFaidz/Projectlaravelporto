<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

class Homecontroller extends Controller {
    public function index() {
        return view('home');
    }
    //
}