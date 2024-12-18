<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'number_of_bedrooms',
        'number_of_bathrooms',
        'location',
        'latitude',
        'longitude',
        'description',
        'price',
        'discounted_price',
        'maximum_guests',
        'available_from',
        'inquiry_limit',
        'product_hero_image',
        'other_images',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'available_from' => 'date',
        'other_images' => 'array',
    ];

    /**
     * Define the relationship with amenities.
     */
    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'amenity_product', 'product_id', 'amenity_id');
    }
    public function media()
    {
        return $this->belongsToMany(Media::class, 'product_media', 'product_id', 'media_id');
    }
}
