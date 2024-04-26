<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenesController extends Controller
{
    public function ordenes() {
        return view('ordenes');
    }
}
