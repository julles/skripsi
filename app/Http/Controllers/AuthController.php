<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class AuthController extends Controller
{

	public $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

    public function getSignUp()
    {
    	return view('auth.sign');
    }

    public function getLogin()
    {
    	return view('auth.login');
    }
}
