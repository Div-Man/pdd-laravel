<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Feedback;
use App\Tips;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    
    
    public function tips()
    {
        $tips = Tips::with('users')->get();
        
        return view('tips', [
            'tips' => $tips
        ]);
    }
     public function storeTips(Request $request)
    {
        $rules = [
            'g-recaptcha-response' => 'required|recaptcha',
            'text' => 'required',
          
           ];
    
        $messages = [
            'g-recaptcha-response.required' => 'Подтвердите, то что вы не робот.',
            'text.required' => 'Напишите сообщение',
            
         ];
    
        Validator::make(
            $request->all(), 
            $rules ,
            $messages
              )->validate(); 
        
        $tips = new Tips;
       
       $tips->text =  nl2br($request->text) ;
       $tips->user_id = Auth::id();
       $tips->save();
       
       return redirect()->back();
        
    }

    
   public function showFeedback()
   {
       
       return view('feedback');
   }
   
    public function storeFeedback(Request $request)
   {
        
         $rules = [
            'g-recaptcha-response' => 'required|recaptcha',
            'text' => 'required',
            'email' => 'required|email',
          
           ];
    
        $messages = [
            'g-recaptcha-response.required' => 'Подтвердите, то что вы не робот.',
            'email.required' => 'Введите свою почту, на неё вы получите ответ.',
            'email.email' => 'Вы ввели не email',
            'text.required' => 'Напишите сообщение',
            
         ];
    
        Validator::make(
            $request->all(), 
            $rules ,
            $messages
              )->validate(); 
        
       $feedback = new Feedback;
       
       $feedback->text = $request->text;
       $feedback->email = $request->email;
       $feedback->save();
       
       return redirect()->back()->with('addFeedback', 'Ваше сообщение отправлено, ждите ответа, в течение дня.');
        
       
   }
   
   public function about()
   {
       return view('about');
   }
   

}
