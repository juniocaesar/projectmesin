<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_AdminUnit extends Controller
{
    //
    public function index() {
        return view('v_adminunit_dashboard');
    }
}
