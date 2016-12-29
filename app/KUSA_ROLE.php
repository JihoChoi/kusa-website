<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KUSA_ROLE extends Model
{
    //
    protected $table = 'roles';

    public function users() {
      return $this->belongsToMany('App\Users', 'user_role', 'role_id', 'user_id');
    }

}
