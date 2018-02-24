<?php namespace Bantenprov\JumlahPendudukGolonganDarah\Http\Middleware;

use Closure;

/**
 * The JumlahPendudukGolonganDarahMiddleware class.
 *
 * @package Bantenprov\JumlahPendudukGolonganDarah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class JumlahPendudukGolonganDarahMiddleware
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
