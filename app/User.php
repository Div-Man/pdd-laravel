<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword as ResetPasswordNotification;
use App\Notifications\CustomVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
        use Notifiable;
       
    public function sendPasswordResetNotification($token)
    {
        
        $this->notify(new ResetPasswordNotification($token));
    }
    
    
    /*
     * 
     * https://www.kodementor.com/send-verification-email-after-registration-in-laravel-5-7/
     * 
     * https://laracasts.com/discuss/channels/laravel/how-to-create-custom-email-verification-template-laravel-57
    * 
     */
    
      public function sendEmailVerificationNotification()
     
    {
       
        $this->notify(new CustomVerifyEmail);

    }
     
     
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'network', 
        'email_verified_at',
        'last_login_ip,'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    
    public function questions()
    {
        return $this->belongsToMany('App\Questions');
    }
    
    
    //количество вопросов у каждого юзера для комментов
    public function countQuestions()
    {
        return $this->hasMany('App\Questions', 'user_id', 'id'); 
    }
    
     public function countComments()
    {
        return $this->hasMany('App\Comment', 'user_id', 'id'); 
    }
    
    public function userRole($number)
    {
        switch ($number) {
            case 1:
               return "Пользователь";
                break;
            case 2:
                return "Модератор";
                break;
            case 3:
                return "Администратор";
                break;
        }
        
    }
}
