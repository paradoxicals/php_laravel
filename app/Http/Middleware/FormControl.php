<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FormControl
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->text =="serkan"){
          return redirect()->back();
        }
        return $next($request);
    }
}
