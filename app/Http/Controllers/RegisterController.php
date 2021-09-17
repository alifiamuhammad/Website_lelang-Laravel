<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Hash;
class RegisterController extends Controller
{
    public function registeration()
    {
        return view ('register');
    }

    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
        'role' => $data['role']
      ]);
    }
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('Great! please login.');
    }
    
}
