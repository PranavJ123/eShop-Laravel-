<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    function login(Request $request)
    {
        $user= User::where(['email'=>$request->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return view('password');
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $request){
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }
}
