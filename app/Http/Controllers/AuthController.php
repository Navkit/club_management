<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended('/');
        }
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        $name = $request->name;
        $password = $request->password;

        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            return redirect()->intended('/');
        }
        
        return redirect('login')->with('error', 'Sorry, the username or password is incorrect.');
    }

    public function postRegistration(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return Redirect::to("/")->withSuccess('Great! You have successfully logged in');
    }

    public function dashboard()
    {
        return redirect('/cards');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
