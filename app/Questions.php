<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    
  
    
    //получить автора вопроса 
    
    public function users()
    {
        return $this->hasMany('App\User', 'id', 'user_id');
          
    }
    
    
    //получить название города
    public function gorods()
    {
        return $this->hasMany('App\Goroda' , 'id', 'gorod_id');
    }
    
     //получить название района
    public function raions()
    {
        return $this->hasMany('App\Raioni' , 'id', 'raion_id');
    }
    
     //получить название региона
    public function regions()
    {
        return $this->hasMany('App\Region' , 'id', 'region_id');
    }
    
    
    
    /////////////////////////////////////////////////
    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id', 'id')->where('checked', 2);

    }
    
    
    //добавлен ли вопрос в закладки
    public function bookmark()
    {
        return $this->belongsToMany('App\User');
    }
    
      //получить название пункта ПДД
    public function itemPdd()
    {
        return $this->hasMany('App\ItemsPdd' , 'id', 'get_item_pdd');
    }
    
    //получить название подпункта пункта ПДД
    
    public function subItemPdd()
    {
        return $this->hasMany('App\SubItems' , 'id', 'get_sub_item_pdd');
    }
    
    //получить название категории знаков
    
    public function getSingPdd()
    {
        return $this->hasMany('App\CategorySing' , 'id', 'get_sing_pdd');
    }
    
    //получить знаки
    public function getSing()
    {
        return $this->hasMany('App\Sings' , 'id', 'sing_pdd');
    }
    
    
    //категории разметок
     public function getMarkingPdd()
    {
        return $this->hasMany('App\CategoryRoadMarking' , 'id', 'get_marking_pdd');
    }
    
    
    //пункты разметок
      public function getMarking()
    {
        return $this->hasMany('App\RoadMarking' , 'id', 'marking_pdd');
    }
    
    //категории допуска
    
     public function getPermissionPdd()
    {
        return $this->hasMany('App\CategoryPermission' , 'id', 'get_permission_pdd');
    }
    
    //пункты допусков
    
      public function getPermission()
    {
        return $this->hasMany('App\PermissionPdd' , 'id', 'permission_pdd');
    }
   
}
