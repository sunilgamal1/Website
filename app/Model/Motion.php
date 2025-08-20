<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motion extends Model
{
    use HasFactory;

    protected $table = 'motions';

    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'banner_image',
        'description',
        'banner_image_2',
        'title_2',
        'sub_title_2',
        'conclusion',
        'button_text',
        'button_link',
        'status',
        'publish_at_home',
        'position',
        'video_1',
        'about_title',
    ];

    public function images()
    {
        return $this->hasMany(MotionImage::class);
    }

    public function infos()
    {
        return $this->hasMany(MotionInfo::class);
    }
}
