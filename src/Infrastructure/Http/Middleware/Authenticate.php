<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Routing\UrlGenerator;

final class Authenticate extends Middleware
{
    public function __construct(
        AuthFactory $auth,
        private readonly UrlGenerator $urlGenerator,
    ) {
        parent::__construct($auth);
    }

    /**
     * {@inheritDoc}
     *
     * @throws \InvalidArgumentException
     */
    protected function redirectTo($request): ?string
    {
        if (!$request->expectsJson()) {
            return $this->urlGenerator->route('login');
        }

        return null;
    }
}
