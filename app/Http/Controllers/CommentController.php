<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Comment;
use App\User;
use App\Questions;



use MasterRO\LaravelXSSFilter\XSSCleanerFacade;
use HTMLPurifier;



class CommentController extends Controller {
  
    public function store(Request $request) {

 
        //dd($request->all());
        $rules = [
            'text' => 'required',
        ];

        $messages = [
            'text.required' => 'Введите текст',
        ];

        Validator::make(
                $request->all(), $rules, $messages
        )->validate();




        //dd(Auth::user()->role);
        //проверить существует ли такой пост
        //$textComment = preg_replace("/\<script.*?\<\/script\>/", "", $request->text);
 //$textComment = XSSCleanerFacade::clean($request->text);
        
        //dd($request->text);
  $purifier = new HtmlPurifier();

    $textComment = $purifier->purify($request->text);
       

        if (!empty($request->reply_user_id)) {
            $comment = new Comment;


            if (Auth::user()->role == 3 || Auth::user()->role == 2) {
                $comment->checked = 2;
            }

            $comment->text = $textComment;
            $comment->post_id = $request->post_id;
            $comment->user_id = Auth::id();
            $comment->checked = 2;
            $comment->last_login_ip = $request->getClientIp();
            $comment->save();
            

            //это для того что бы показать в уведомлениях
            //на какой пост ответили

            $userCommentId = $comment->id;

            if ((int) $request->user_post_id == Auth::id() && (int) $request->user_post_id == (int) $request->reply_user_id) {
                return redirect()->back();
            }

            $comment->sendNotificationReply(
                    $request->post_id, $request->user_post_id, Auth::id(), $userCommentId, $request->reply_user_id
            );


            return redirect()->back()->with('addComment', 'Комментарий будет опубликован, после проверки.');
        } else {
            
            
            //dd($request->all());

            $comment = new Comment;


            $changeTextToLink = preg_replace(
                    "/(?<!a href=\")(?<!src=\")((http|ftp)+(s)?:\/\/[^<>\s]+)/i", "<a href=\"\\0\" target=\"blank\">\\0</a>", $textComment
            );

            if (Auth::user()->role == 3 || Auth::user()->role == 2) {
                $comment->checked = 2;
            }

            $comment->text = $changeTextToLink;
            $comment->post_id = $request->post_id;
            $comment->user_id = Auth::id();
            $comment->checked = 2;
            $comment->last_login_ip = $request->getClientIp();
            $comment->save();


            //это для того что бы показать в уведомлениях
            //на какой пост ответили

            $userCommentId = $comment->id;

            //что бы не присылало самому себе уведомление, если просто оставить 
            //коммент на свой пост
            if ((int) $request->user_post_id == Auth::id()) {
                return redirect()->back()->with('addComment', 'Комментарий будет опубликован, после проверки.');
            }

            $comment->sendNotification(
                    $request->post_id, $request->user_post_id, Auth::id(), $userCommentId
            );


            return redirect()->back()->with('addComment', 'Комментарий будет опубликован, после проверки.');
        }
    }

    static public function countNotification() {
        $user = User::find(Auth::id());

        $countNotifications = $user->unreadNotifications()->count();

        return $countNotifications;
    }
    
    

    public function readNotification() {
         
    $user = User::find(Auth::id());
  
        //если все комменты прочитаны  
        if ($user->unreadNotifications->count() == 0) {
            return view('read-notifications', [
                'allData' => $user->Notifications()->paginate(10),
            ]);
        }
        
        //не прочитанные, сначала они выводятся
        else {
            
                return view('read-notifications', [
                'allData' => $user->unreadNotifications,
            
            ]);  
             
            
        }
    
    }

    /*
     * http://qaru.site/questions/5994553/mark-as-read-a-specific-notif-in-laravel-53-notifications
     * 
     * 
     * $notification = auth()->user()->notifications()->find($notificationid);
      if($notification) {
      $notification->markAsRead();
      }
     * 
     * 
      $id = auth()->user()->unreadNotifications[0]->id;
      auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
     *          */

    public function markNotifRead(Request $request) {

        $id = $request->idComment;

        $user = User::find(Auth::id());
        foreach ($user->unreadNotifications as $notification) {

            if ($notification->id == $id) {
                $notification->markAsRead();   
            }
        }

        return 1;
    }

    public function deleteNotification($id) {
        
        DB::table('notifications')->where('id', $id)->delete();
        return redirect()->back();
    }

}
