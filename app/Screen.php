<?php

namespace App;
use App\Ad;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
	public function ads(){
    	return $this->belongsToMany('App\Ad');
	}
}
