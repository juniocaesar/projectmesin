<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index() {
        return view('auth/login');
    }
    public function loginProcess(Request $request) {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
                ]
            );
            $hashed_password = Hash::make($request->password);
            $credentials = $request->only('username', 'password');
            
            if (Auth::attempt($credentials)) {
                # code...
                $user = Auth::user();
                if ($user->role_id == '0') {
                    return 'authed role 0';
                    // return redirect()->intended('superadmin/dashboard');
                } elseif ($user->role_id == '1') {
                    return 'authed role 1';
                    // return redirect()->intended('adminpusat/dashboard');
                }
                return 'authed no role';
                // return redirect()->intended('/');
            }
            return Auth::check();
            // return redirect('login');
    }
}
