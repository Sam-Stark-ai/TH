<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlendSection extends Model
{
    protected $table = 'blend_sections';

    protected $fillable = [
        'blend_tab_title',
        'blend_heading',
        'blend_button_title',
        'blend_image',
    ];
}
