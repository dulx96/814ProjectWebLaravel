<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialController extends Controller
{
	$guser;

	public function redirectToProvider()
	{
		return Socialite::driver('google')->redirect();
	}

	public function handleProviderCallback()
	{
		$guser = Socialite::driver('google')->user();
		// return response()->json($user);
		return view('users.addpass', compact('guser'));
	}

	public function save() {
		global $guser;
		User::create([
			'UserEmail' => $guser->email,
			'UserFirstName' => $guser->name,
			'UserLastname' => $guser->user->name->familyName,
			'UserPassword' => Hash::make(request('pass'))
		]);
		$user = User::where('UserEmail', $guser->email)->first();
		return view('users.show', compact('user'));
	}
}
