<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'my_blogs';

    protected $fillable = [
        'title',
        'topic',
        'content',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
