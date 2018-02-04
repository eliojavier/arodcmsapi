<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class CanDeleteArticle
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
        $user = User::findUserByToken($request->user()->id);

        $exists = $user->roles->contains('name', 'editor') ||
            $user->roles->contains('name', 'superadmin');

        if (!$exists) {
            $article = $request->route('article');

            $isArticleWriter = $user->articles->contains('id', $article->id);

            if (!$isArticleWriter) {
                return response()->json(['msg' => 'forbidden access'])
                    ->setStatusCode(403);
            }
        }

        return $next($request);
    }
}
