<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'business_number',
        'business_description',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
