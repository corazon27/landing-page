<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug', 
        'thumbnail', 
        'content', 
        'status', 
        'views',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Opsional: Memastikan views selalu mulai dari 0 jika tidak diisi
    protected $attributes = [
        'views' => 0,
    ];
}