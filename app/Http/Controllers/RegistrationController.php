<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	// dd(request()->all());

    	//validate
    	$this->validate(request(),[
    		'name' => 'required|min:2',
    		'email'=> 'required|email',
    		'password' => 'required|confirmed',


    		]);


    	//create user
    	$user = User::create([

    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => request('password'),

    		]);

    	//sign them in 

    	auth()->login($user);

    	//redirect

    	return redirect()->home();
    }
}
