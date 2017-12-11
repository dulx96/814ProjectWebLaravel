<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class SessionCotroller extends Controller
{
	public function new() {
		return view('users.login');
	}

	public function create()
	{
		$user = User::where('UserEmail', request('email'))->first();      
		if ($user && Hash::check(request('pass'), $user->UserPassword)) {
			return view('users.show', compact('user'));
		}
		flash('Wrong email or password')->error();
		return redirect('/login');
	}


	public function destroy() {

	}
}
