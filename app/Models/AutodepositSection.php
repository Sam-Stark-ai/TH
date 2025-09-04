<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutodepositSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'description',
        'deposit_email',
    ];

}
