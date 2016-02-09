<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
	protected $fillable = ['name', 'slug', 'description'];

	public function photos() {
	    return $this->morphMany(Photo::class, 'imageable');
	}

	public function setNameAttribute($name)
	{
		$this->attributes['name'] = $name;
		$this->attributes['slug'] = str_slug($name);
	}
}
