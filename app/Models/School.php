<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'cnpj',
        'name',
        'url',
        'email',
        'logo',
        'active',
        'subscription',
        'subscription_id',
        'subscription_active',
        'subscription_suspended',
        'expires_at'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
