<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public function user() {
    	return $this->belongsTO('App\User');
	}

	public function article() {
		return $this->belongsTO('App\Article');
	}    
}
