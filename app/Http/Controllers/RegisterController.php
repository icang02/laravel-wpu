<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:6|max:191',
            'username' => 'required|unique:users|min:6|max:25',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:191',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull');

        return redirect('/login')->with('success', 'Registration success! Please login');
    }
}
