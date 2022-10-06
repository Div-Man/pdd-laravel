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

class UloginController extends Controller {
    
      public function __construct()
    {
        $this->middleware('setting');
    }
    
    public function login(Request $request) {
        //https://habr.com/ru/post/320046/
        //https://toster.ru/q/70508
        
        //надо сгенерировать пароль
        
        $data = file_get_contents('http://ulogin.ru/token.php?token=' . $request->get('token') .
                '&host=' . $_SERVER['HTTP_HOST']);
        $user = json_decode($data, true);
        $userData = User::where('email', $user['email'])->get();
        if (!$userData->isEmpty()) {
            
            $user = User::find($userData->first()->id);
            
            
             $user->last_login_ip = $request->getClientIp();
             $user->save();
  
            $userAuth = Auth::loginUsingId($userData->first()->id, true);
            return redirect('/');
        }
        
        
        $one = Str::random(10);
        $two = Str::random(rand(1, 10));
        $password =  $one.$two;
        
          $newUser = User::create([
          'name' => $user['network'] . $user['uid'],
          'email' => $user['email'],
          'password' => Hash::make($password),
          'network' => $user['network'] .  $user['uid'],
          'email_verified_at' => Carbon::now()->toDateTimeString(),
          ]);
          
         
           $newUser->last_login_ip = $request->getClientIp();
             $newUser->save();
            
          Auth::loginUsingId($newUser->id, true);
          return redirect('/my-profile');
    }
}