<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ad;

class Category extends Model
{

	protected $table = "categories";
    protected $fillable = ['name'];
    
    public function ads(){
    	return $this->hasMany('App\Ad');
    }
}
