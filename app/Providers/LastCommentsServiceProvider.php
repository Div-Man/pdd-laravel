<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\User;
use App\Comment;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

class LastCommentsServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {

        view()->composer('layouts.app', function ($view) {

                
            $countComments = Comment::with('users')
                    ->orderBy('created_at', 'desc')
                    ->take(2)
                    ->get();
            $view->with('countComments', $countComments);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
