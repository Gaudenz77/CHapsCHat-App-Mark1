<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyLibrary extends Model
{
use HasFactory;
/* protected $table = 'my_libraries'; */
protected $fillable = ['topic', 'content'];

}
