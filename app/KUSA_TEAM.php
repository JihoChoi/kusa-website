<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KUSA_TEAM extends Model
{
    //
    protected $table = 'kusa-team';

    public function users() {
      return $this->belongsToMany('App\Users', 'user_team', 'team_id', 'user_id');
    }

}
