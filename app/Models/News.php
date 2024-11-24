<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'restricted_pages',
    ];

    protected $casts = [
        'restricted_pages' => 'array',
    ];
    
    public function user(){
        return $this->belongsTo(user::class);
    }
    
}