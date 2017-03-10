<?php

namespace App;
use App\Ad;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    public function ad(){
    	return $this->belongsTo('App\Ad');
    }
}
