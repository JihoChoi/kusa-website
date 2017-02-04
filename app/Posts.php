<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $table = 'posts_table';

    public function images() {
      return $this->hasMany('App\Images', 'post_id');
    }

    public function event_categories() {
	    return $this->belongsTo('App\EVENT_CATEGORY', 'event_category');
    }
}
