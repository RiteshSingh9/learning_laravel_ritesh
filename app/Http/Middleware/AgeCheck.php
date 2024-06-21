<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "<pre>";
        // var_dump($request);
        $age= $request->age;
        if ($age < 18) {
            die("You cannot visit this site.");
        }
        // echo '<h1>Echo from AgeCheck </h1>';
        // $request
        return $next($request);
    }
}
