<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'order_code',
        'digital_art_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'total_price',
        'status',
    ];

    protected $casts = [
        'total_price' => 'decimal:2',
    ];

    public function artwork(): BelongsTo
    {
        return $this->belongsTo(
            DigitalArt::class,
            'digital_art_id'
        );
    }
}
