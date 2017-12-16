<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialController extends Controller
{
	public static $guser;

	public function redirectToProvider()
	{
		return Socialite::driver('google')->redirect();
	}

	public function handleProviderCallback()
	{
		self::$guser = Socialite::driver('google')->user();
		// return response()->json($user);
		$email = self::$guser->email;
		// dd($this->guser);
		return view('users.addpass', compact('email'));
	}

	public function save() {
		// dd(self::$guser);
		$newUser = new User;
        $newUser->UserEmail = self::$guser->email;
        $newUser->UserFirstName = self::$guser->name;
        $newUser->UserLastName = self::$guser->user->name->familyName;
        $newUser->UserPassword = Hash::make(request('pass'));
        $newUser->save();
		$user = User::where('UserEmail', self::$guser->email)->first();
		return view('users.show', compact('user'));
	}
}