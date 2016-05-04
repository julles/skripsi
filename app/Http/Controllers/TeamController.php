<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Team;

class TeamController extends Controller
{
	public $model;

	public function __construct(Team $team)
	{
		$this->team = $team;
	}

	/**
	 * Method Listing Team
	 * Menampilkan team yang di miliki si owner , atau yang terkait
	 * dengan team lain
	 */

    public function getIndex()
    {
    	
    }
}
