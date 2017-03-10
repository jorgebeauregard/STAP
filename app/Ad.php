<?php

namespace App;
use App\Screen;
use App\Code;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	public function screen(){
    	return $this->belongsToMany('App\Screen');
    }

    public function codes(){
    	return $this->hasMany('App\Code');
    }
}
