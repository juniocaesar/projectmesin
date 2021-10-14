<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_SuperAdmin_Try extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        $mr_data = DB::table('m_role')->get();
        $mre_data = DB::table('m_region')->get();
        $mu_data = DB::table('m_user')->get();

        return view('v_superadmin_dashboard', [
            'mr_data' => $mr_data,
            'mre_data' => $mre_data,
            'mu_data' => $mu_data,
        ]);
    }
}
