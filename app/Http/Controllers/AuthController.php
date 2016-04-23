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

    public function postSignUp(Request $request)
    {
        $rules = [
            'name'                  => 'required|max:255',
            'email'                 => 'required|email|max:255|unique:users',
            'password'              => 'min:6|required',
            'verify_password'       => 'same:password',
        ];

        $this->validate($request,$rules);
   
        $inputs = $request->all();

        $inputs['password'] = \Hash::make($request->password);

        $this->user->create($inputs);

        return redirect()->back()->withSuccess('successful registration, please check your email for confirmation');
    }

    public function getLogin()
    {
    	return view('auth.login');
    }
}
