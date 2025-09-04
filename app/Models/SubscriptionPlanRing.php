<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlanRing extends Model
{
    protected $table = 'subscription_plan_rings';

    protected $fillable = [
        'ring_id',
        'title',
        'amount',
        'duration',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
