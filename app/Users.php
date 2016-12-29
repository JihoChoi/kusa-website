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
      return $this->belongsToMany('App\KUSA_ROLE', 'user_role', 'user_id', 'role_id');
    }

    public function teams()
    {
      return $this->belongsToMany('App\KUSA_TEAM', 'user_team', 'user_id', 'team_id');
    }
}
