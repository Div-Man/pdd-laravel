<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Questions;
use App\Comment;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;


use App\ItemsPdd;
use App\CategorySing;
use App\CategoryRoadMarking;
use App\CategoryPermission;

use App\SubItems;
use App\Sings;
use App\RoadMarking;
use App\PermissionPdd;


class QuestionsController extends Controller
{
    public function index()
    {  
            $allQuestion = Questions::with('users')
                    ->orderBy('checked', 'asc')
                    ->paginate(10);
            
                
        return view('admin.questions.index', ['questions'=>$allQuestion]);
    }
    
    public function showOne($id)
    {
        $comments = Comment::with('users')->where('post_id', $id)->get();
        //dd($comments);
        
        $question = Questions::with('gorods')
                ->with('raions')
                ->with('regions')
                ->with('users')
                ->where('id', $id)
                ->get()->first();
        
                
              //dd($question);
        return view('admin.questions.show', ['question'=>$question]);
        
    }
    
    public function questionChecked($id)
    {
        $question = Questions::find($id);
        $question->checked = 2;
        $question->save();
        
        return redirect('/planeta3/questions');
       
    }
    
    public function questionNotVerified($id)
    {
        $question = Questions::find($id);
        $question->checked = 1;
        $question->save();
        
        return redirect('/planeta3/questions');
       
    }
    
    public function edit($id)
    {
         $question = $this->getQuestionById($id);
        
        
        //сделать проверку на админа, что бы был доступ
        
        if($question->user_id == Auth::id() || Auth::id() == 1) {
            $regions = DB::table('regions')->get();

        $itemsPdd = ItemsPdd::all();
        $categorySing = CategorySing::all();
        $categorMarkings = CategoryRoadMarking::all();
        $categorPermissions = CategoryPermission::all();
       
        
        
        return view('edit_question', [
            'question' =>  $question,
            'regions' => $regions,
            'itemsPdd' => $itemsPdd,
            'categorySing' => $categorySing,
            'categorMarkings' => $categorMarkings,
            'categorPermissions' =>  $categorPermissions
            
            
        ]);
        }
        
        
    }
    
     public function getQuestionById($id)
    {
        
        $question = Questions::find($id);
        return $question;
    }
    
    public function delete($id)
    {
         //сделать проверку, что вопрос
        //пренадлежит к юзеру
        
  
  
        $question = $this->getQuestionById($id);
         
       if ($question != null) {
            
             if($question->user_id == Auth::id() || Auth::id() == 1) {
                 
                Storage::delete($question->images);
                 
                Questions::destroy($id);
                
                $notifications = DB::table('notifications')->select('id')
                ->whereJsonContains('data->post_id', $id)
                ->get()->pluck('id')->toArray();
                
                DB::table('comments')->where('post_id', '=', $id)->delete();
                DB::table('questions_user')->where('questions_id', '=', $id)->delete();
                DB::table('notifications')->whereIn('id', $notifications)->delete();
                
                
                return back();
            }
              
        }
        return 'Ошибка Удаления';
        
    }
    
}
