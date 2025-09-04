<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    protected $table = 'user_subscriptions';

    protected $fillable = [
        'user_id',
        'ringorder_details',
        'subscription_details',
        'payment_method',
        'payment_id',
        'amount',
        'start_date',
        'duration'
    ];

    protected $casts = [
        'ringorder_details' => 'array',
        'subscription_details' => 'array',
        'start_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'amount' => 'float',
    ];

    /**
     * Get the user that owns the subscription.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
