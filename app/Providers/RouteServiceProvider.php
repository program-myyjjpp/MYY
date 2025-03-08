<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting(): void
    {
        //针对update更新素材包 / sql入库的限流
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)
                ->by($request->user()?->id ?: $request->ip())
                ->response(function (Request $request, $remainingAttempts) {
                    return response()->json([
                        'success' => false,
                        'message' => 'You have exceeded the rate limit for requests.',
                        'retryAfter' => $remainingAttempts,
                        'tips' => 'Please wait before making additional requests.'
                    ], Response::HTTP_TOO_MANY_REQUESTS);
                });
        });

        //针对post文章发布的限流
        RateLimiter::for('api_post', function (Request $request) {
            return Limit::perMinute(60)
                ->by($request->user()?->id ?: $request->ip())
                ->response(function (Request $request, $remainingAttempts) {
                    return response()->json([
                        'success' => false,
                        'message' => 'You have exceeded the rate limit for requests.',
                        'retryAfter' => $remainingAttempts,
                        'tips' => 'Please wait before making additional requests.'
                    ], Response::HTTP_TOO_MANY_REQUESTS);
                });
        });
    }
}
