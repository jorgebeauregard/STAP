<?php

namespace App;
use App\Ad;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
	protected $table = "codes";
    protected $fillable = ['name','ad_id','active'];

    public function ad(){
    	return $this->belongsTo('App\Ad');
    }
}
