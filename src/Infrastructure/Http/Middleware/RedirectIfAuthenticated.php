<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final readonly class RedirectIfAuthenticated
{
    public function __construct(
        private AuthFactory $authFactory,
        private ResponseFactory $responseFactory,
    ) {
    }

    /**
     * Handle an incoming request.
     *
     * @param \Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = $guards === [] ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($this->authFactory->guard($guard)->check()) {
                return $this->responseFactory->redirectTo('/home');
            }
        }

        return $next($request);
    }
}
