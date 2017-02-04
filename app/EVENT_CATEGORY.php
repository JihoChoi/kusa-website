<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EVENT_CATEGORY extends Model
{
    //
	protected $table = 'event_categories';
	public function posts() {
		return $this->hasMany('App\Posts');
	}
}
