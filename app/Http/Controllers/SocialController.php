<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class SocialController extends Controller
{
	public function redirectToProvider()
	{
		return Socialite::driver('google')->redirect();
	}

	public function handleProviderCallback(Request $request)
	{
		$guser = Socialite::driver('google')->user();
		$email = $guser->email;
		// dd($guser);
		$request->session()->put('guser', $guser);
		return view('users.addpass', compact('email'));
	}

	public function save(Request $request) {
		$guser = $request->session()->get('guser');
		// dd($guser);
		$newUser = new User;
		$newUser->UserEmail = $guser->email;
		$newUser->UserFirstName = $guser->name;
		$newUser->UserLastName = $guser->user['name']['familyName'];
		$newUser->UserPassword = Hash::make(request('pass'));
		$newUser->save();
		$user = User::where('UserEmail', $guser->email)->first();
		Cookie::queue('usercookie', $guser->UserEmail, 10000000);
		return view('users.show', compact('user'));
	}
}