<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Image;

use App\Models\Team;

class TeamController extends Controller
{
	public $model;

	public function __construct(Team $team)
	{
		$this->model = $team;
	}

	/**
	 * Method Listing Team
	 * Menampilkan team yang di miliki si owner , atau yang terkait
	 * dengan team lain
	 */

    public function getIndex()
    {
    	$teams = $this->model->whereOwnerId(user()->id)->paginate(1);

    	return view('team.index' , [
    		'model'	=> $this->model,
    	]);
    }

    /**
     * Method Menambahkan Team Baru
     */
    public function getCreate()
    {
    	$model = $this->model;

    	return view('team._form' , [
    		'model'	=> $model,
    	]);
    }

    /**
     * Method Handle Request Form Create
     * Menyimpan data ke table teams
     * dari request form yang ada di method getCreate()
     */

    public function postCreate(Request $request)
    {
    	$model = $this->model;

    	$this->validate($request,$model->rules());

    	$inputs = $request->all();

    	// Manipulation Request Form
    	
    	$inputs['slug'] = str_slug($request->name.' '.helper()->encrypt($request->name));
		$inputs['avatar'] = $this->handleAvatar($request);
		$inputs['owner_id'] = user()->id;
		
		//
		
		$model->create($inputs); 

		echo "Team has been Saved";
    }

    // Handle Avatar File Upload Method

    public function handleAvatar($request)
    {
    	$avatar = $request->file('avatar');

    	if(!empty($avatar))
    	{
    		$avatarName = str_random(10).'.'.$avatar->getClientOriginalExtension();
    		$path = public_path('contents/');
    		$pathStandardImage = $path.$avatarName;
    		$pathThumbnailImage = $path.'thumbnails/'.$avatarName;
    		Image::make($avatar)->resize(110,110)->save($pathStandardImage); // handle standard image
    		Image::make($avatar)->resize(50,50)->save($pathThumbnailImage); // handle thumbnail image
    		return $avatarName;
    	}else{
    		return '';
    	}
    }

    //
}
