<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CheckArticleWriter
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
        $article = $request->route('article');

        $user = User::findUserByToken($request->user()->id);

        $isArticleWriter = $user->articles->contains('id', $article->id);

        if (!$isArticleWriter) {
            return response()->json(['msg' => 'forbidden access'])
                ->setStatusCode(403);
        }

        return $next($request);
    }
}
