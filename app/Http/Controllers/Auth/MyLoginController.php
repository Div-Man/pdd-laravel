<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class MyLoginController extends Controller {
   

   public function __construct()
    {
        $this->middleware('setting');
    }

    
     public function login(Request $request) {
         
          
         $messages = [
            'email.required' => 'Заполните поле',
            'email.email' => 'Вы ввели не email',
            'password.required' => 'Введите пароль',
            'password.min' => 'Пароль слишком короткий (миниум 8 символов)',
             
        ];

         
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8',
        ], $messages);
        

        
     if ($validator->fails()) {
         $message = ['error' => 'Неправильный логин или пароль'];
          //return Redirect::back()->withErrors($validator); //без аякса
         return response()->json($message);
         
        }
        
        else {
             $userData = User::where('email', $request->email)->get();
             
             if (!$userData->isEmpty()) {
                 
                 if (password_verify($request->password, $userData->first()->password)) {

                      $user = User::find($userData->first()->id);
                      $user->last_login_ip = $request->getClientIp();
                      $user->save();

                     Auth::loginUsingId($userData->first()->id, true);
                     
                     $message = ['ok' => 1];
                    return response()->json($message);
                 }
                 else {
                     $message = ['error' => 'Неправильный логин или пароль'];
                    return response()->json($message);
                 }
                  
             }
             
             else {
                 $message = ['error' => 'Неправильный логин или пароль'];
                 return response()->json($message);
             }
            
        }

    }


    

}
