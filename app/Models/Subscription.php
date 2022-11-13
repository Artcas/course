<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'processor_key',
        'status',
        'price',
        'customer_id',
        'trial_ends_at',
        'ends_at'
    ];

    protected $dates = [
        'trial_ends_at',
        'ends_at'
    ];

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
