<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => "Login",
        ]);
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
        $user = DB::table('users')->where('username', $request->username)->first();;
        if (!$user) {
            return redirect('/login')->withErrors([
                'username' => 'Username tidak ditemukan!'
            ]);
        } else {
            $checkedPassword = Hash::check($request->password, $user->password);
            if (!$checkedPassword) {
                return redirect('/login')->withErrors([
                    'password' => 'Password salah!'
                ]);
            } else {
                Auth::loginUsingId($user->id);
                return redirect('/home');
            }
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}
