<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageInformation extends Model
{
	protected $table = 'package_information';
    protected $fillable = ['package_id', 'title', 'description'];

    public function package() {
    	return $this->belongsTo(Package::class);
    }
}
