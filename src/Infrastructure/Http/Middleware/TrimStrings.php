<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

final class TrimStrings extends Middleware
{
    /** {@inheritDoc} */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}
