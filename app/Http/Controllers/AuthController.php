<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Helper;
use Setting;

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

        $user = $this->user->create($inputs);

        $url = url('auth/confirmation/'.$user->id.'/'.Helper::encrypt($user->id));

        \Mail::send('auth.email_confirmation' , ['user' => $user,'url' => $url] , function($m) use ($user){
            $m->from('no-reply@'.Setting::attribute('domain'));
            $m->to($user->email)->subject('Account Confirmation');
        });

        return redirect()->back()->withSuccess('successful registration, please check your email for confirmation');
    }

    public function getLogin()
    {
    	return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'email'     => 'required|email',
            'password'  => 'required'
        ];
        
        $this->validate($request,$rules);

        $auth = Auth::attempt([
            'email'     => $request->email,
            'password'  => $request->password,
            'status'    => 'y',
        ]);

        if($auth)
        {
            return redirect('/');
        }else{
            return redirect()->back()->withError('Username or Password wrong!')->withInput();
        }
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('auth/login');
    }

    public function getConfirmation($id,$value)
    {
        $cek = Helper::encrypt($id);

        if($cek === $value)
        {
            $model = $this->user->findOrFail($id);
            
            if($model->status == 'y')
            {
                abort(404);
            }    
            
            $model->status = 'y';

            $model->update();

            Auth::loginUsingId($model->id);

            return redirect('/')->withSuccess('Account Confirmation Success');
        }
    }
}
