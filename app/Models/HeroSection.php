<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $table = 'hero_sections';

    protected $fillable = [
        'hero_heading',
        'hero_subheading',
        'hero_button1_text',
        'hero_button1_link',
        'hero_button2_text',
        'hero_button2_link',
        'hero_image',
    ];
}
