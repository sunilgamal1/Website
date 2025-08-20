<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraphicArt extends Model
{
    use HasFactory;

    protected $table = 'graphic_arts';

    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'banner_image',
        'banner_image_name',
        'description',
        'url_title',
        'url_link',
        'client',
        'year',
        'role',
        'banner_image_2',
        'banner_image_2_name',
        'conclusion',
        'publish_at_home',
        'status',
        'position',
    ];

    public function images()
    {
        return $this->hasMany(GraphicArtImage::class);
    }
}
