<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

class Blogcontroller extends Controller {
    public function index() {
        return view('blog');
    }
    //
}