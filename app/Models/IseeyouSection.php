<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IseeyouSection extends Model
{
    use HasFactory;

    protected $table = 'iseeyou_sections';

    protected $fillable = [
        'heading',
        'description',
        'video',
        'video_link',
        'button_text',
    ];
}
