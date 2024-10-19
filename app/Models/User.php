<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Define the table associated with the model (if not using the default plural name)
    protected $table = 'users';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // If you want to hide sensitive fields from JSON responses
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // If you want to cast attributes to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
