<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\QuestionController;
use App\ItemsPdd;
use App\CategorySing;
use App\CategoryRoadMarking;
use App\CategoryPermission;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
//use Illuminate\Support\Facades\Route;
//use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Support\Facades\Route;

use App\Questions;




class FiltersServiceProvider extends ServiceProvider {

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
        
           
         
        
        view()->composer('layouts.app', function ($view) {
            
            $controllerQuestion = new QuestionController();
            $regions = $controllerQuestion->chooseCity();
            
            $pddModel = new ItemsPdd();
            $pdd = $pddModel->all();
            
            $allSings = new CategorySing();
            $sings = $allSings->all();
            
            $allRoad = new CategoryRoadMarking();
            $roads = $allRoad->all();
            
            $allPermission = new CategoryPermission();
            $permissions = $allPermission->all();
            
            
            $region_id = Cookie::get('region_id');  
            $raion_id = Cookie::get('raion_id');
            $gorod_id = Cookie::get('gorod_id');
            
            $region = DB::table('regions')->where('id', $region_id)->get();
            $raion = DB::table('raioni')->where('id', $raion_id)->get();
            $gorod = DB::table('goroda')->where('id', $gorod_id)->get();
            
           
                    
          

            $view->with('regions', $regions)
                    ->with('pdd', $pdd)
                    ->with('sings', $sings)
                    ->with('roads', $roads)
                    ->with('permissions', $permissions)
                    ->with('raion', $raion)
                    ->with('gorod', $gorod);
        });

    }

}
