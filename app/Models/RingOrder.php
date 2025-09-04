<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RingOrder extends Model
{
    protected $table = 'ring_orders';

    protected $fillable = [
        'user_id',
        'package_detail',
        'female_rings',
        'male_rings',
        'female_ring_size',
        'male_ring_size',
        'price',
        'fullname',
        'email',
        'phone',
        'partner_name',
        'address',
        'payment_method',
        'payment_id',
        'is_gift',
        'gift_details'
    ];

    protected $casts = [
        'package_detail' => 'array',
        'gift_details' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'price' => 'float',
    ];

    /**
     * Get the user that owns the ring order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
