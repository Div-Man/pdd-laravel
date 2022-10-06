<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Comments extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
   public function __construct($details) {
        $this->details = $details;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable) {
        return ['database'];
    }

    public function toDatabase($notifiable) {
        return [
            'post_id' => $this->details['post_id'],
            'user_post_id' => $this->details['user_post_id'],
            'comment_id' => $this->details['comment_id'],
            'user_comment_id' => $this->details['user_comment_id'],
            'user_comment_name' => $this->details['user_comment_name'],
            'question_title' => $this->details['question_title'],
            'comment_text' => $this->details['comment_text'],
            'data_comment' => $this->details['data_comment'],
        ];
    }
    
}
