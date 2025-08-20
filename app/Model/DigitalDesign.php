<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalDesign extends Model
{
    use HasFactory;

    protected $table = 'digital_designs';

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
        'section_title_1',
        'section_description_1',
        'section_title_2',
        'section_description_2',
        'button_title',
        'button_link',
        'banner_image_3',
        'banner_image_3_name',
        'conclusion',
        'publish_at_home',
        'status',
        'position',
    ];

    public function images()
    {
        return $this->hasMany(DigitalDesignImage::class);
    }

    public function infos()
    {
        return $this->hasMany(DigitalDesignInfo::class);
    }
}
