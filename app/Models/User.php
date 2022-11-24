<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** {@inheritDoc} */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /** {@inheritDoc} */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /** {@inheritDoc} */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
