<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Cookie;

class SessionCotroller extends Controller
{
	public function new() {
		if(Cookie::get('usercookie')==''){
			return view('users.login');
		}
		flash('You has already logged in')->warning();
		return redirect('/users');
	}

	public function create()
	{
		$user = User::where('UserEmail', request('email'))->first();      
		if ($user && Hash::check(request('pass'), $user->UserPassword)) {
			Cookie::queue('usercookie', $user->UserEmail, 10000000);
			return redirect('/users');
		}
		flash('Wrong email or password')->error();
		return redirect('/login');
	}

	public function destroy() {
		Cookie::queue(Cookie::forget('usercookie'));
		return redirect('/login');
	}
}
