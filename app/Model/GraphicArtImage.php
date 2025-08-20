<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraphicArtImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'graphic_art_id',
        'image',
        'image_name',
        'position'
    ];

    public function graphicArt()
    {
        return $this->belongsTo(GraphicArt::class);
    }
}
