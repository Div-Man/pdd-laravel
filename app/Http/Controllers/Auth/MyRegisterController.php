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

class MyRegisterController extends Controller {
   

   public function __construct()
    {
        $this->middleware('setting');
    }

    
     public function register(Request $request) {
         
         //dd($request->all());
         $messages = [
            'login.required' => 'Придумайте имя',
            'login.min' => 'минимум 3 символа',
            'email.required' => 'Заполните поле',
            'email.email' => 'Вы ввели не email',
            'password.required' => 'Введите пароль',
            'password.min' => 'Пароль слишком короткий (миниум 8 символов)',
             
        ];
         
        $validator = Validator::make($request->all(), [
            'login' => 'required|min:3',
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8',
            
        ], $messages);
        

        
     if ($validator->fails()) {
         return response()->json($validator->errors());
         
        }
        
        
        
         
        else {
             $userEmail = User::where('email', $request->email)->get();
             $userLogin = User::where('name', $request->login)->get();
             
             
             if (!$userEmail->isEmpty()) {
                 
                 $message = ['error' => 'Такой e-mail уже занят, введите другой'];
                 return response()->json($message);
  
             }
             
             if(!$userLogin->isEmpty()){
                 $message = ['errorLogin' => 'Такой логин уже занят, введите другой'];
                 return response()->json($message);
             }
               
             
             else {
                 
                  $newUser = User::create([
                    'name' => $request->login,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                
                 
                  Auth::loginUsingId($newUser->id, true);
                     
                    $message = ['ok' => 1];
                    return response()->json($message);
                 
             }
            
            
        }
          

    }


    

}
