<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ItemsPdd;
use App\CategorySing;
use App\CategoryPermission;
use App\CategoryRoadMarking;

use App\SubItems;
use App\Sings;
use App\RoadMarking;
use App\PermissionPdd;

class PddController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemsPdd = ItemsPdd::all();
        $categorySing = CategorySing::all();
        $categoryPermission = CategoryPermission::all();
        $categoryRoadMarking = categoryRoadMarking::all();

         return view('pdd', [
             'itemsPdd' => $itemsPdd,
             'categorySing' => $categorySing,
             'categoryPermission' => $categoryPermission,
             'categoryRoadMarking' => $categoryRoadMarking
         ]);
    }
    
    
    
     public function getItemPdd($id)
    {
        $subItems = SubItems::where('item_id', $id)->get();
        return $subItems->toArray();
        
    }
    
    public function showItem($id)
    {
        $subItems = SubItems::where('item_id', $id)->get();

         return view('showItem', [
             'subItems' => $subItems
         ]);
        
    }
    
    
    
    
    
      public function getSings($id)
    {
        $sings = Sings::where('sing_id', $id)->get();
        return $sings->toArray();
        
    }
    
    public function showSings($id)
    {
        
        $sings = Sings::where('sing_id', $id)->get();

         return view('showSings', [
             'sings' => $sings
         ]);
         
        
    }
    
    
       public function getMarking($id)
    {
        $marking = RoadMarking::where('road_marking_id', $id)->get();
        return $marking->toArray();
        
    }
    
     public function showMarking($id)
    {
        
        $markings = RoadMarking::where('road_marking_id', $id)->get();

         return view('show_road_markings', [
             'markings' => $markings
         ]);
         
        
    }
    
    
        public function getPermission($id)
    {
        $permissions = PermissionPdd::where('permissions_id', $id)->get();
        return $permissions->toArray();
        
    }
    
     public function showPermission($id)
    {
        
        $permissions = PermissionPdd::where('permissions_id', $id)->get();

         return view('permission_pdd', [
             'permissions' => $permissions
         ]);
         
        
    }
}
