<?php

declare(strict_types=1);

namespace App\Infrastructure;

use Illuminate\Foundation\Exceptions\Handler as BaseHandler;

final class ExceptionHandler extends BaseHandler
{
    /** {@inheritDoc} */
    #[\Override]
    public function register(): void
    {
        //
    }
}
