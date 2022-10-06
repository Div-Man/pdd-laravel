<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use App\Questions;
use App\User;
Use App\Comment;
Use Illuminate\Support\Facades\Session;

class UserController extends Controller {

    public function index() {
        
        //это было для старого дизайна, перенёс в провайдеры
        //$user = User::find(Auth::id());

        return view('my-profile');
    }

    public function userProfile($id) {

        $user = User::find($id);

        $userQuestionCount = Questions::all()->where('user_id', $id)->count();

        return view('user-profile', [
            'user' => $user,
            'userQuestionCount' => $userQuestionCount
        ]);
    }

    public function updateProfile(Request $request) {


        if ($request->file('image')) {
            Storage::makeDirectory('uploads/users/id' . Auth::id());
            $image = $request->file('image');

            $img700 = \Intervention\Image\Facades\Image::make($image)->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img700->save('uploads/users/id' . Auth::id() . '/' . time() . '.jpg');

            $avatar = '/uploads/users/id' . Auth::id() . '/' . $img700->basename;

            DB::table('users')
                    ->where('id', Auth::id())
                    ->update(['avatar_700' => $avatar]);
        }

        

        if ($request->name) {

            $user = User::find(Auth::id());

            $findUser = DB::table('users')
                            ->where('name', $request->name)->get();


            if ($user->edit_name == null) {
                if ($findUser->isEmpty()) {
                    DB::table('users')
                            ->where('id', Auth::id())
                            ->update(['name' => $request->name, 'edit_name' => 1]);
                } else {
                    return redirect()->back()->with('dublicat', 'Такое имя уже зарегистрировано, выберите другое.');
                }
            }
        }

        return redirect()->back();
    }

}
