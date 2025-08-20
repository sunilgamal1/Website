<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalDesignImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'digital_design_id',
        'image',
        'image_name',
        'position'
    ];

    public function digitalDesign()
    {
        return $this->belongsTo(DigitalDesign::class);
    }
} 