<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    protected $fillable = [
        'article_id', 
        'name', 
        'email', 
        'comment', 
        'is_approved'
    ];

    /**
     * Relasi Balik: Komentar ini dimiliki oleh satu Artikel.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}