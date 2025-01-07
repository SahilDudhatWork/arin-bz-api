<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject // If using JWT
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'number',
        'phone_otp',
        'phone_otp_exp'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string> 
     * 
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

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
