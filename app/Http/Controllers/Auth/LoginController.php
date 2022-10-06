<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('guest')->except('logout');
    }

    
 
    
        
    
    
    /*
    protected function validateLogin(Request $request) {

       return Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'The email is required.',
            'email.email' => 'The email needs to have a valid format.',
            'email.exists' => 'The email is not registered in the system.',
       ]);
        
    }
     * 
     */
        
        /*
          $messages = [
          'email' => 'Неверный e-mail или пароль.',
          'password.required' => 'Неверный e-mail или пароль.'
          ];

          $this->validate($request, [
          'email'           => 'required|max:255|email',
          'password'           => 'required',
          ], $messages );
          */
          
          
        /*
        $rules = [
            'email' => 'required',
            
        ];

        $messages = [
            'email' => 'Неверный e-mail или пароль.',
          'password.required' => 'Неверный e-mail или пароль.'
           
        ];

        Validator::make(
                $request->all(), $rules, $messages
        )->validate();
         * *
         */
         
    //}

    public function authenticated(Request $request, $user) {
       
        $user->update([
            'last_login_ip' => $request->getClientIp()
        ]);
    }

}
