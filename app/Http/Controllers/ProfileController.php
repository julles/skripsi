<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Image;

class ProfileController extends Controller
{

	public $model;

	public function __construct(User $model)
	{
		$this->model = $model;
	}

    public function getIndex()
    {
    	$model = $this->model->findOrFail(auth()->user()->id);

    	return view('profile' ,compact('model'));
    }

    public function insertImage($request,$model)
    {
    	$image = $request->file('image');

    	if(!empty($image))
    	{
    		@unlink(public_path('contents/'.$model->image));
    		@unlink(public_path('contents/thumbnails/'.$model->image));

    		$imageName = str_slug($model->id.' '.$model->name).'.'.$image->getClientOriginalExtension();

    		Image::make($image)->resize(110,110)->save(public_path('contents/'.$imageName)); // image standard
    		Image::make($image)->resize(50,50)->save(public_path('contents/thumbnails/'.$imageName)); // image small

    		return $imageName;
    	}else{
    		return $model->image;
    	}
    }

    public function postIndex(Request $request)
    {
    	$model = $this->model->find(auth()->user()->id);

    	$rules = [
    		'name'	=> 'required',
    		'git'	=> 'url',
    		'password'	=> 'required',
    		'image'		=> 'image|max:1000',
    	];
		
    	$messages = [
    		'image.max'	=> 'The image may not be greater than 1 MB !.',
    	];

		$this->validate($request,$rules,$messages);
		
		$inputs = $request->all();

		$image = $this->insertImage($request,$model);
    	
    	$inputs['image'] = $image;
    	
    	$inputs['password'] = \Hash::make($request->password);
    		
    	$model->update($inputs);
    	
    	return redirect()->back()->withSuccess('Profile has been updated');
    }
}
