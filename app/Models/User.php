<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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
