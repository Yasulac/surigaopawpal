<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Pipeline;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class EnsureFrontendRequestsAreStateful
{
    /**
     * Handle the incoming requests.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        // We will not apply CSRF checks
        return (new Pipeline(app()))->send($request)->through(
            static::fromFrontend($request) ? $this->frontendMiddleware() : []
        )->then(function ($request) use ($next) {
            return $next($request);
        });
    }

    /**
     * Get the middleware that should be applied to requests from the "frontend".
     *
     * @return array
     */
    protected function frontendMiddleware()
    {
        // Remove the CSRF validation part for stateless requests
        return array_values(array_filter(array_unique([
            config('sanctum.middleware.encrypt_cookies', \Illuminate\Cookie\Middleware\EncryptCookies::class),
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // Do not include CSRF validation middleware
            config('sanctum.middleware.authenticate_session'),
        ])));
    }

    /**
     * Determine if the given request is from the first-party application frontend.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    public static function fromFrontend($request)
    {
        // No CSRF validation needed
        return false;
    }
}
