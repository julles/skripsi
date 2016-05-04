<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Team;

class TeamContributor extends Model
{
    protected $table = 'team_contributors';

    public $guarded = [];

    public function contributor()
    {
    	return $this->belongsTo(User::class,'contributor_id');
    }

    public function team()
    {
    	return $this->belongsTo(Team::class,'team_id');
    }
}
