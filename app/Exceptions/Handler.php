<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
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
