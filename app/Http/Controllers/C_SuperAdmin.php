<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_SuperAdmin extends Controller
{
    //
    public function index() {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        $mr_data = DB::table('m_role')->get();
        $mre_data = DB::table('m_region')->get();
        $mu_data = DB::table('users')->get();
        // echo("<script>alert('". gettype($mre_data) ."');</script>");
        return view('v_superadmin_dashboard', [
            'mr_data' => $mr_data,
            'mre_data' => $mre_data,
            'mu_data' => $mu_data,
        ]);
    }
}
