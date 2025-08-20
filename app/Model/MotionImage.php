<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotionImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'motion_id',
        'image',
        'image_name',
        'position'
    ];

    public function motion()
    {
        return $this->belongsTo(Motion::class);
    }
} 