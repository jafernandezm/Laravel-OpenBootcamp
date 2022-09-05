<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Http\Log;

class ValidateFormMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $input=$request->except(['_token']);
        $formValid=true;
        $error=[];
        if(strlen($input['name']) ==0){
           $formValid=false;
           $error[]="El nombre esta vacio";
        }
        
        
        
        if(strlen($input['phone']) <9){
           $formValid=false;
           $error[]="El telefono esta vacio";
        }
         
  
  
        if(!$formValid){
         
           return redirect()->back()->withInput();
        }
        return $next($request);
    }
}
