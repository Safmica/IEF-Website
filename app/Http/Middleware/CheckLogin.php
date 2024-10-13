<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah header X-Local-Storage-Data ada
        if (!$request->hasHeader('X-Local-Storage-Data')) {
            // Jika tidak ada, arahkan ke halaman login
            return redirect('/login');
        }

        // Jika ada, lanjutkan ke permintaan berikutnya
        return $next($request);
    }
}
