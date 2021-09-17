<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
class auth_controller extends Controller
{
    public function index()
    {
        return view ('login');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }

    public function proses_login(Request $request)
    {
    
        request()->validate(
            [
                'username' =>' required',
                'password' => 'required',
            ]);
            $kredensil = $request->only('username' , 'password');
            if(Auth::attempt($kredensil)){
                $user= Auth::user();
            if($user->role == 'admin'){
                return redirect()->intended('home1')->with('alert-success', 'You are now logged in as admin.');
            }else if($user->role == 'member'){
                    return redirect()->intended('home2');
            }
            return redirect()->intended('/');
        }
        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'Username or Password was Incorrect.']);
}

    
    }