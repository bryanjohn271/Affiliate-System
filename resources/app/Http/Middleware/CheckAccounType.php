<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckAccounType;
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

       

        $user = user::find(\Auth::id());

        if($user->account_id == "0"){

            die('not admin');

        }else {

            die('admin');


        }

        dd($request);

        return $next($request);
    }
}
