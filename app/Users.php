<?php

namespace App;

use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    //
    protected $table = 'users';

    public function roles()
    {
      return $this->belongsToMany('App\KUSA_ROLE', 'user_team_role');
    }

    public function teams()
    {
      return $this->belongsToMany('App\KUSA_TEAM', 'user_team_role');
    }
}
