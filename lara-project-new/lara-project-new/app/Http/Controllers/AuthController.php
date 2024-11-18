<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Application;


class AuthController extends Controller
{
    public function show_signup(){
        return view('signup');
    }

    public function signup(Request $request){
        $request->validate([
            'full_name'=> 'required|string|max:255',
            'phone'=>'required|min:11|max:11',
            'login'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:6'
        ]);

        $user = User::create([
            'full_name'=> $request->full_name,
            'phone'=> $request->phone,
            'login'=> $request->login,
            'email'=> $request->email,
            'password'=>Hash::make( $request->password),
            'role'=>'Юзер'
        ]);

        return redirect()->route('show_signin');
    }

    public function show_signin(){
        return view('signin');
    }

    public function signin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|string|min:6'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            
        ])) {
            $user = Auth::user();
            
            if ($user->role == "Админ") {
                
                return redirect()->route('appl_all');
            } else {
                return redirect()->route('appl');
            }
        } else {
            
            return response()->json(['error' => 'Неверные данные'], 401);
        };
    }

    public function admin(){
        return view('admin');
    }

    public function user(){
        return view('user');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('show_signup');
    }



}
