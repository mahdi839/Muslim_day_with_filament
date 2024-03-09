<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuaContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'dua_category_id',
        'dua_item_title_en',
        'dua_item_title_bn',
        'subtitle_bn',
        'subtitle_en',
        'dua_item_row_html',
        'sanad_en',
        'sanad_bn',
        'matan_en',
        'matan_bn',
        'arabic_dua',
        'translation_en',
        'translation_bn',
        'reference_en',
        'reference_bn',
        'explanation',


        // Add "title" to the fillable array
        // Other fillable properties if any
    ];
}
