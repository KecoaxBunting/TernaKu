<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staffController extends Controller
{
    public function show() {
        return view('staff');
    }
}
