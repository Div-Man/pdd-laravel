<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use App\Comment;
use App\User;
use App\Questions;



class CommentsController extends Controller 
{
    public function index(Request $request)
    {
          $comments = Comment::with('users')->orderBy('checked', 'asc')->get();
          
        return view('admin.comments.index', [
            'comments' => $comments
                ]);
    }
    
    public function show($id)
    {
        Comment::where('id', $id)->update(['checked' => 2]);
        return redirect()->back(); 
    }
    
     public function edit($id)
    {
        dd($id);
    }
    
    public function disable($id)
    {
        Comment::where('id', $id)->update(['checked' => 1]);
        return redirect()->back(); 
    }
    
    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
       
         $notifications = DB::table('notifications')->select()
                ->whereJsonContains('data->comment_id', (int)$id)
                ->get()->pluck('id')->first();

         DB::table('notifications')->where('id', $notifications)->delete();
         
         return redirect()->back(); 
  
    }

}
