<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
    
       $validatedData = $request->validate([
        'name'=>'required|max:255',
        'username'=> 'required|unique:users|max:255|min:4',
        'email' => 'Required|email|unique:users',
        'password' => 'required|min:8' 
       ]);

       $validatedData['password'] = bcrypt($validatedData['password']);
User::create($validatedData);
// $request->session()->flash('Success', 'Registration Successful! Please login');
return redirect('/login')->with('Success', 'Registration Successful! Please login');

    //    dd('registrasi berhasil');
    }
}
