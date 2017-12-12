<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialController extends Controller
{
	public function redirectToProvider()
	{
		return Socialite::driver('google')->redirect();
	}

	public function handleProviderCallback()
	{
		$guser = Socialite::driver('google')->user();
		// return response()->json($user);
		$guserEmail = $guser->email;
		return view('users.addpass', compact('guserEmail'));
	}

	public function save() {
		$newUser = new User;
        $newUser->UserEmail = $guser->email;
        $newUser->UserFirstName = $guser->name;
        $newUser->UserLastName = $guser->user->name->familyName;
        $newUser->UserPassword = Hash::make(request('pass'));
        $newUser->save();

		$user = User::where('UserEmail', $guser->email)->first();
		return view('users.show', compact('user'));
	}
}
