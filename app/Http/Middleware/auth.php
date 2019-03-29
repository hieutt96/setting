<?php

namespace App\Http\Middleware;

use Closure;
use App\Exceptions\AppException;
use App\Libs\RequestAPI;

class auth
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
        if($request->header('Authorization')) {
            $access_token = $request->header('Authorization');   
        }else {
            throw new AppException(AppException::REQUEST_EXPIRED);
        }

        $response = RequestAPI::request('GET', '/api/user/detail', ['headers' => ['Authorization' => $access_token]]); 
        if($response->code == AppException::ERR_NONE) {
            $request->user = $response->data;
            return $next($request);
        }       
        throw new AppException(AppException::ERR_INVALID_TOKEN);
    }
}
