<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;

class VerifyCategoriesCount
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
        session()->flash('error', 'Você precisa criar ao menos uma categoria antes de criar posts!');
        if(Category::all()->count() == 0){
            return redirect(route('categories.create'));
        }
        
        return $next($request);
    }
}
