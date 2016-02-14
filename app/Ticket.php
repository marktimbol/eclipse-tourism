<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	protected $fillable = ['package_id', 'name', 'adultPrice', 'childPrice'];

    public function package() {
    	return $this->belongsTo(Package::class);
    }

    public function information()
    {
    	return $this->hasMany(TicketInformation::class);
    }
}
