<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalDesignInfo extends Model
{
    use HasFactory;
    
    protected $fillable = ['digital_design_id', 'title', 'info'];

    public function digitalDesign()
    {
        return $this->belongsTo(DigitalDesign::class);
    }
} 