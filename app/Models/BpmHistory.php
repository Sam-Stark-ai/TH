<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BpmHistory extends Model
{
    protected $table = 'bpm_histories';

    protected $fillable = [
        'user_id',
        'bpm_history',
        'ekg_history',
    ];

 protected $casts = [
        'bpm_history' => 'array',
        'ekg_history' => 'array',
    ];

    public $timestamps = true;
}
