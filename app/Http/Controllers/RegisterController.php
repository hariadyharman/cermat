<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{public function index()
    {
return view('register.index',[
           'title'=>'Register',
           'active'=>'register'

]);
    }
 public function store(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|unique:users,username',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:6',
    ]);

    try {
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/register')->with('success', 'Registrasi berhasil!');
    } catch (\Exception $e) {
        return redirect('/register')->with('error', 'Registrasi gagal, silahkan ulang.');
    }
}

}
