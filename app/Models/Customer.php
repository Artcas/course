<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Customer extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'is_active',
        'first_name',
        'last_name',
        'email',
        'is_verified',
        'password'
    ];

    protected $hidden = [
        'otp_code',
        'email_token',
        'password'
    ];

    public function subscription(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Subscription::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function setPasswordAttribute($pass)
    {
        if ($pass)
            $this->attributes['password'] = Hash::make($pass);
    }
}
