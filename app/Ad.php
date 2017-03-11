<?php

namespace App;
use App\Screen;
use App\Code;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	public function screen(){
    	return $this->belongsToMany('App\Screen');
    }

    public function codes(){
    	return $this->hasMany('App\Code');
    }

    public function user(){
    	return $this->belongsTo('App\User')
    }
}
