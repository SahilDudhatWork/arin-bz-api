<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'from_date',
        'to_date',
        'status',
    ];
}
