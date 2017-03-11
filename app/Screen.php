<?php

namespace App;
use App\Ad;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
	protected $table = "screens";
    protected $fillable = ['latitude','longitude','name','city','province'];

	public function ads(){
    	return $this->belongsToMany('App\Ad');
	}
}
