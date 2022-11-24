<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

final class RedirectIfAuthenticated
{
    public function __construct(
        private readonly AuthFactory $authFactory,
        private readonly ResponseFactory $responseFactory,
    ) {
    }

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @noinspection PhpDocSignatureIsNotCompleteInspection
     */
    public function handle(Request $request, Closure $next, ...$guards): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($this->authFactory->guard($guard)->check()) {
                return $this->responseFactory->redirectTo('/home');
            }
        }

        return $next($request);
    }
}
