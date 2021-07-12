<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        //return $req->input();
        $user = User::where(['email' => $req->email])->first();

        //return $user->password;

        if (!$user || !Hash::check($req->password, $user->password)) {

            return "Username or password does not match";
        } else {

            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function signup(Request $req)
    {

        $user = new User;
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return  redirect('/login');
    }
}
