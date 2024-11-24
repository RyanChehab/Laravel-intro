<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'text',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
