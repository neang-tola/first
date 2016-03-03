<?php

namespace App\Http\Middleware;
use App\Http\Controllers\Controller;
use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Controller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if($this->isLogin() == false){
            return redirect()->guest('/inter-backend')->with('token', csrf_token());
        }
/*        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('inter-banckend');
            }
        }*/

        return $next($request);
    }
}
