<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    protected $table = 'images_table';

    public function post() {
      return $this->belongsTo('App\Posts');
    }
}
