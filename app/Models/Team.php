<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Team extends Model
{
	public $guarded = [];

    public function rules()
    {
    	return [
    		'name'		=> 'required',
    		'avatar'	=> 'image|max:1000',
    	];
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'owner_id');
    }
}
