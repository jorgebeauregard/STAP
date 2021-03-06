<?php

namespace App;
use App\Screen;
use App\Code;
use App\User;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{

    protected $table = "ads";
    protected $fillable = ['user_id','category_id','path','quantity','limit','active'];

	public function screen(){
    	return $this->belongsToMany('App\Screen');
    }

    public function codes(){
    	return $this->hasMany('App\Code');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function category(){
    	return $this->belongsTO('App\Category');
    }
}
