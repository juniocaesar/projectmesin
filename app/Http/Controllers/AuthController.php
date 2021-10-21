<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('auth/login');
    }

    public function loginProcess(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role_id == '0') {
                return redirect()->intended('superadmin/dashboard');
            } elseif ($user->role_id == '1') {
                return redirect()->intended('adminpusat/dashboard');
            } elseif ($user->role_id == '2') {
                return redirect()->intended('adminunit/dashboard');
            } elseif ($user->role_id == '3') {
                return redirect()->intended('operator/dashboard');
            }
            return redirect()->intended('/');
        }
        return redirect('login')->with('error', 'Username atau password salah.');;
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}
