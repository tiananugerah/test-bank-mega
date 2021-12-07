<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {   
        $request->validate([
            'username'=>'required|string',
            'password'=>'required|string'
        ]);
        $credentials = $request->only('username', 'password');
     
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
     
            return redirect()->intended('dashboard');
        }
     
        return back()->with([
            'loginError' => 'username atau Password salah',
        ]);
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
