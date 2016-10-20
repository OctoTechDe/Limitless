<?php

namespace App\Http\Middleware;

use Landlord;
use Closure;
use Auth;

class TenantMiddleware
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
        $company = Auth::user()->company_id;
        Landlord::addTenant('company_id', $company);

        return $next($request);
    }
}
