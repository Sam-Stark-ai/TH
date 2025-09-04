<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gift extends Model
{
    use SoftDeletes;

    protected $table = 'gifts';

    protected $fillable = [
        'icon',
        'title',
        'rings_count',
        'description',
        'includes',
        'price',
        'couples_connected',
        'is_gift',
        'link'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];


}
