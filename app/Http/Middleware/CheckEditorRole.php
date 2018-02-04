<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckEditorRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::findUserByToken($request->user()->id);

        $exists = $user->roles->contains('name', 'editor');

        if (!$exists) {
            return response()->json(['msg' => 'forbidden access'])
                ->setStatusCode(403);
        }

        return $next($request);
    }
}
