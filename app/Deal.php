<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
	protected $fillable = ['package_id', 'adultPrice', 'childPrice', 'description'];
	
    public function package()
    {
    	return $this->belongsTo(Package::class);
    }
}
