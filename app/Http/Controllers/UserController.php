<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:4'
        ]);

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));

        $user = new User();
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->password = $password;

        $user->save();

        Auth::login($user);
        //$request->session()->put(['first_name' => $first_name, 'email' => $email]);
        return redirect()->route('home');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            // $request->session()->put(['first_name' => Auth::user()->first_name, 'email' => $$request['email']]);
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
