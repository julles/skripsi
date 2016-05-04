<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Team;

class User extends Authenticatable
{
    public $guarded = ['verify_password'];

    public function teams()
    {
        return $this->hasMany(Team::class,'owner_id');
    }
}
