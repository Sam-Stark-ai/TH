<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeartRing extends Model
{
    protected $table = 'heart_rings';

    protected $fillable = [
        'heart_ring_tab_title',
        'heart_ring_heading',
        'heart_ring_description',
        'heart_ring_button',
        'heart_ring_image_1',
        'heart_ring_image_2',
    ];
}
