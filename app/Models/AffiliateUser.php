<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; // Import ini
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable; // Pastikan ini ada

class AffiliateUser extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = 'affiliate_users';

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