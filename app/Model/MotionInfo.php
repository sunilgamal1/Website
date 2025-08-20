<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotionInfo extends Model
{
    use HasFactory;
    protected $fillable = ['motion_id', 'title', 'info'];

    public function motion()
    {
        return $this->belongsTo(Motion::class);
    }
}
