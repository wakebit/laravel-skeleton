<?php

declare(strict_types=1);

namespace App\Infrastructure;

use Illuminate\Foundation\Exceptions\Handler as BaseHandler;

final class ExceptionHandler extends BaseHandler
{
    /** {@inheritDoc} */
    protected $levels = [
        //
    ];

    /** {@inheritDoc} */
    protected $dontReport = [
        //
    ];

    /** {@inheritDoc} */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /** {@inheritDoc} */
    public function register(): void
    {
        //
    }
}
