<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_SuperAdmin extends Controller
{
    //
    public function index() {
        return view('v_superadmin_dashboard');
    }
}
