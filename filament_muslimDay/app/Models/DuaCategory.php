<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuaCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_bn',
        'image_url',

        // Add "title" to the fillable array
        // Other fillable properties if any
    ];
}
