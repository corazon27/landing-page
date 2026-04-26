<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Agar bisa login nantinya

class Affiliate extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}