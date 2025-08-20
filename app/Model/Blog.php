<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'banner_image',
        'author',
        'published_at',
        'description',
        'content',
        'image',
        'conclusion',
        'tags',
        'status',
        'position',
    ];

    protected $casts = [
        'published_at' => 'date',
        'status' => 'boolean',
        'position' => 'integer',
    ];
}
