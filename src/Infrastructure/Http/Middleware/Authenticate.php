<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;

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
    #[\Override]
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : $this->urlGenerator->route('login');
    }
}
