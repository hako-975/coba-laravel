<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
			'name' => 'required|max:255',
			'username' => ['required', 'min:2', 'max:255', 'unique:users'],
			'email' => 'required|email:dns|unique:users',
			'password' => 'required|min:5|max:255'
		]);

		// $validatedData['password'] = bcrypt($validatedData['password']);
		$validatedData['password'] = Hash::make($validatedData['password']);

		User::create($validatedData);
		
		// session()->flash('register-success', 'Registration successful!');

		return redirect('/login')->with('register-success', 'Registration successful!');;
	}
}
