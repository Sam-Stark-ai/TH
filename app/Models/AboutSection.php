<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $table = 'about_sections';

    protected $fillable = [
        'tab_title',
        'heading',
        'paragraph',
        'user',
        'countries',
        'satisfaction',
        'connections',
        'growth',
        'map_tab_title',
        'map_heading',
        'map_paragraph',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
} 