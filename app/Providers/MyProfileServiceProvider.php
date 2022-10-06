<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Route;

use App\Questions;

class MyProfileServiceProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        view()->composer('my-profile', function ($view) {
            
           $questionsClass = new Questions();
           
           $allQuestion = Questions::with('gorods')
                ->with('raions')
                ->with('regions')
                ->with('users')
                ->withCount(['bookmark' => function ($query) {
                        $query->where('user_id', Auth::id());
                    }])
                ->where('user_id', Auth::id())
                ->orderBy('created_at', 'DESC')
                ->paginate(5);
                    
            $user = User::find(Auth::id());         
            $view->with('myQuestions', $allQuestion)->with('user', $user);
        });
       
    }

}
