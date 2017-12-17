<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Cookie;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return $users;
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {

        $newUser = new User;
        $newUser->UserEmail = request('email');
        $newUser->UserFirstName = request('firstName');
        $newUser->UserLastName = request('lastName');
        $newUser->UserPassword = Hash::make(request('pass'));
        $newUser->save();

        $user = User::where('UserEmail', request('email'))->first();
        Cookie::queue('usercookie', request('email'), 10000000);

        return view('users.show', compact('user'));
    }

    public function show()
    {
        if(Cookie::get('usercookie')==''){
            flash('You has not logged in')->warning();
            return redirect('/login');
        }
        $user = User::where('UserEmail', Cookie::get('usercookie'))->first();
        return view('users.show',compact('user'));
    }

    public function edit()
    {
        if(Cookie::get('usercookie')==''){
            flash('You has not logged in')->warning();
            return redirect('/login');
        }
        $user = User::where('UserEmail', Cookie::get('usercookie'))->first();
        return view('users.edit',compact('user'));
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
