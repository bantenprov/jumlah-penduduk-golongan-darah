<?php namespace Bantenprov\JPGolonganDarah\Http\Middleware;

use Closure;

/**
 * The JPGolonganDarahMiddleware class.
 *
 * @package Bantenprov\JPGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JPGolonganDarahMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
