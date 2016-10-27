<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Article extends Model
{
	public function user() {
    	return $this->belongsTO('App\User');
	}
	public function comments() {
		return $this->hasMany('App\Comment');
	}
}

