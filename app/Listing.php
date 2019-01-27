<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
     /**
     * 
     */
    protected $fillable = [
        'title', 'post_code', 'features', 'details', 'price', 'rent', 'bedrooms', 'bathrooms', 'lounges', 'type', 'is_buy',
    ];

    /**
     * 
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
