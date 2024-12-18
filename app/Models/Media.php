<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['file_path', 'is_hero_image'];

    public function getfilePathAttribute($value)
    {
        return url('/storage/' . $value);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_media');
    }
}
