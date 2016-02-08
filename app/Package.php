<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'category_id',
    	'name', 
        'slug', 
        'subtitle',
        'description', 
        'adult_price', 
        'child_price',
        'has_time_options',
        'confirm_availability',
        'minimum_quantity',
        'has_ticket_option'
    ];

    public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->attributes['slug'] = str_slug($name);

        // $this->makeSlug($name);
    }

    public function makeSlug($name)
    {    
        $this->attributes['slug'] = str_slug($name);

        $slug = str_slug($name);

        $latestSlug = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                        ->latest('id')
                        ->pluck('slug');

        if( $latestSlug )
        {
            $pieces = explode('-', $latestSlug);

            $number = intval(end($pieces));

            $this->attributes['slug'] = $slug . '-' . ($number + 1);
        }
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_details')
                    ->withPivot('adult_quantity', 'child_quantity', 'date', 'date_submit', 'time');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function information()
    {
        return $this->hasMany(PackageInformation::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function promo()
    {
        return $this->hasOne(Deal::class);
    }

    public function savePromo(Deal $deal)
    {
        return $this->promo()->save($deal);
    }
}
