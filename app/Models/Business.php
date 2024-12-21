<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Business extends Authenticatable implements JWTSubject // If using JWT

{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'business_number',
        'business_description',
        'category_id',
        'phone_otp',
        'phone_otp_exp'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'business_id');
    }

    // Implement the necessary methods for JWT authentication
    public function getAuthIdentifierName()
    {
        return 'id'; // Or the appropriate identifier for your business
    }

    public function getAuthIdentifier()
    {
        return $this->id; // Or the appropriate identifier for your business
    }

    public function getAuthPassword()
    {
        return $this->password; // Assuming you have a password field
    }

    public function getRememberToken()
    {
        return null; // You can return null if you don't use remember tokens
    }

    public function setRememberToken($value)
    {
        // Set remember token if needed
    }

    public function getJWTIdentifier()
    {
        return $this->getAuthIdentifier(); // Usually the primary key
    }

    public function getJWTCustomClaims()
    {
        return []; // Custom claims for JWT
    }
}
