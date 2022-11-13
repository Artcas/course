<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected  $fillable = [
        'process_name',
        'data',
        'status',
        'type',
        'model_name',
        'model_id',
        'causer_name',
        'causer_role',
        'ip_address'
    ];

    protected $casts = [
        'data' => 'collection',
    ];
}
