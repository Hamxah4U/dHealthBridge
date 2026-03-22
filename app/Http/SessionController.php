<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    // public function create(){
    //     return view("users.userlogin");
    // }

    public function store(){
        $attributes = request()->validate([
            "email"=> ["required","email"],
            "password"=> "required",
        ]);

       if (!Auth::attempt(array_merge($attributes, ['status' => 'Active']))) {
        throw ValidationException::withMessages([
            "message" => "Invalid credentials or account not active"
        ]);
    }


        request()->session()->regenerate();

        if(auth::guest()){
            return redirect("/");
        }
        return redirect("/staff/dashboard");

    }

    public function destroy(){
        Auth::logout();
        return redirect("/");
    }  
}