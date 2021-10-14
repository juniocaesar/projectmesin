<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_AdminPusat extends Controller
{
    //
    public function index() {
        return view('v_adminpusat_dashboard');
    }
}
