<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Settings;

class Setting {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
        
        if (Route::current()->getName() == 'add-question' || 
                Route::current()->getName() == 'store-question' ) {

            $question = Settings::where('id', 2)->where('title', 'question')->first();

            if ($question->status != null) {
                echo 'Добавление вопроса временно недоступно.';
                die;
            }

            return $next($request);
        } 
        
        elseif (Route::current()->getName() == 'store-comment') {

            $settingComment = Settings::where('id', 1)->where('title', 'comment')->first();

            if ($settingComment->status != null) {
                echo 'Добавление комментариев, временно отключено';
                die;
            }

            return $next($request);
        }
        
         elseif (Route::current()->getName() == 'feedback' || 
                 Route::current()->getName() == 'feedback-store') {

            $settingComment = Settings::where('id', 3)->where('title', 'support')->first();

            if ($settingComment->status != null) {
                echo 'Техподдержка, временно не доступна.';
                die;
            }

            return $next($request);
        }
        
        elseif (Route::current()->getName() == 'bookmark-add'){
                 
            $settingComment = Settings::where('id', 6)->where('title', 'add_bookmark')->first();

            if ($settingComment->status != null) {
                echo 'Функция, временно не доступна.';
                die;
            }

            return $next($request);
        }
        
        elseif (Route::current()->getName() == 'register'){
                 
            $settingComment = Settings::where('id', 4)->where('title', 'register')->first();

            if ($settingComment->status != null) {
                echo 'Регистрация, временно не доступна.';
                die;
            }

            return $next($request);
        }
        
         else {
                 
            $settingComment = Settings::where('id', 7)->where('title', 'disable_site')->first();

            if ($settingComment->status != null) {
                echo 'Сайт временно не доступен, ведутся ремонтные работы.';
                die;
            }

            return $next($request);
        }
        
        
        return $next($request);
    }

}
