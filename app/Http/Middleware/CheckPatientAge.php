<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPatientAge
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->age <= 17) {
            return response('Maaf, umur Anda belum cukup untuk pendaftaran akun pasien di klinik kesehatan.', 403);
        }

        return $next($request);
    }
}
