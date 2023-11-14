<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Routing\Middleware\SubstituteBindings as BaseSubstituteBindings;

class SubstituteBindings extends BaseSubstituteBindings
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
        try {
            $this->router->substituteBindings($route = $request->route());

            $this->router->substituteImplicitBindings($route);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'status' => [
                    'code' => 404,
                    'message' => 'The data you are looking for was not found'
                ]
            ]);
            // if ($route->getMissing()) {
            //     return $route->getMissing()($request, $exception);
            // }

            // throw $exception;
        }

        return $next($request);
    }
}
