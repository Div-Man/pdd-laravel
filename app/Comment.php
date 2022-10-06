<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Notification;
use App\Questions;
use App\Comment;
use App\Notifications\Comments;
use App\Notifications\CommentReply;

class Comment extends Model {

    protected $fillable = ['post_id'];

    public function users() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
     

    public function sendNotification($idImage, $idUser, $idUserComment, $idComment) {
          //$idComment - id нового коммента

        //здесь будет id юзера, который создал тему
        $user = User::find($idUser);
        $userCommentName = User::find($idUserComment)->name; // тот кто оставил коммент
        $questionTitle = Questions::find($idImage)->description;
        $commentText = Comment::find($idComment)->text;
        $data_comment = Comment::find($idComment)->created_at->format('d.m.Y H:i:s');


        //user_id - тот кто ответил
        //comment_id - id коммента

        $details = [
            'post_id' => $idImage,
            'user_post_id' => $idUser,
            'user_comment_id' => $idUserComment,
            'comment_id' => $idComment,
            'user_comment_name' => $userCommentName,
            'question_title' => $questionTitle,
            'comment_text' => $commentText,
            'data_comment' => $data_comment,
            
        ];

        Notification::send($user, new Comments($details));
    }

    public function sendNotificationReply($idImage, $idUser, $idUserComment, $idComment, $reply_user_id) {
        
        
         //здесь будет id юзера, который создал тему
        $user = User::find($idUser);
        $userCommentName = User::find($idUserComment)->name; // тот кто оставил коммент
        $questionTitle = Questions::find($idImage)->description;
        $commentText = Comment::find($idComment)->text;
        $data_comment = Comment::find($idComment)->created_at->format('d.m.Y H:i:s');
        
        //здесь будет id юзера, который создал тему
        //ему придёт уведомление
        $user = User::find($reply_user_id);


        //user_id - тот кто ответил
        //comment_id - id коммента
        //user_comment_id - тот кто оставил коммент, но это не точно

        $details = [
            'post_id' => $idImage,
            'user_post_id' => $idUser,
            'user_comment_id' => $idUserComment,
            'comment_id' => $idComment,
            'user_comment_name' => $userCommentName,
            'question_title' => $questionTitle,
            'comment_text' => $commentText,
            'data_comment' => $data_comment,
            'reply_user_id' => $reply_user_id
        ];

        Notification::send($user, new CommentReply($details));
    }

    // для уведомлений

    public function question() {
        return $this->hasMany('App\Questions', 'id', 'post_id');
    }

}
