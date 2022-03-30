<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
	public function create(){
		return view('sessions.create');
	}

	public function store(){
		//dd(bcrypt('password'));
		$attributes = request()->validate([
			'email' => 'required|email',
			'password' => 'required'
		]);

		if(auth()->attempt($attributes)){
			session()->regenerate();
			return redirect('/');
		}

		return back()
				->withInput()
				->withErrors(['email' => 'Your provided credentials could not be verified']);
				//withInput() fills in fields with old data
	}

    public function destroy(){
    	auth()->logout();

    	return back();
    }
}
