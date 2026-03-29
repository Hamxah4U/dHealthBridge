<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    
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
        return redirect("/dashboard");

    }

    public function destroy(){
        Auth::logout();
        return redirect("/");
    }  

    public function userLogin(){
        return view("users.index");
    }
}