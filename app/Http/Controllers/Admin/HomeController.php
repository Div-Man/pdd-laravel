<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Feedback;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    
    //вывести список обращений
    public function showAll()
    { 
        $feedback = Feedback::orderBy('checked', 'asc')->paginate(10);
        
    	return view('admin.feedback.index', [
            'feedback' => $feedback,
        ]);
    }
    
    
    //посмотреть обращение отдельно
    public function showById($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedback.show', [
            'feedback' => $feedback,
        ]);

    }
    
    
    //отменить обращение прочитанным
    public function checked($id)
    {
        DB::table('feedback')
            ->where('id', $id)
            ->update(['checked' => 2]);
        
        return redirect('/planeta3/feedback'); 
        
    }
    
    //отменить обращение непрочитанным
    
    public function disable($id)
    {
        DB::table('feedback')
            ->where('id', $id)
            ->update(['checked' => 1]);
        
        return redirect('/planeta3/feedback'); 
    }
}