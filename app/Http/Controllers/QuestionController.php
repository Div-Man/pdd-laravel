<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use App\Questions;
use App\User;
Use App\Comment;
Use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\ItemsPdd;
use App\CategorySing;
use App\CategoryRoadMarking;
use App\CategoryPermission;
use App\SubItems;
use App\Sings;
use App\RoadMarking;
use App\PermissionPdd;
use App\Settings;

class QuestionController extends Controller {

    public function index(Request $request) {

        $region_id = $request->cookie('region_id');
        $raion_id = $request->cookie('raion_id');
        $gorod_id = $request->cookie('gorod_id');

        $pdd_item = $request->cookie('pdd_item');
        $sing_item = $request->cookie('sing_item');
        
        $violator = $request->cookie('violator');
        

        if ($region_id != null &&
                $raion_id != null &&
                $gorod_id != null
        ) {
            if ($pdd_item == null && $sing_item == null) {
                $allQuestion = Questions::with('gorods')
                        ->with('raions')
                        ->with('regions')
                        ->with('users')
                        ->with('comments')
                        ->withCount(['bookmark' => function ($query) {
                                $query->where('user_id', Auth::id());
                            }])
                            ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                        ->where('region_id', $region_id)
                        ->where('raion_id', $raion_id)
                        ->where('gorod_id', $gorod_id)
                        ->where('checked', 2)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(10);

                //$region = DB::table('regions')->where('id', $region_id)->get();
                //$raion = DB::table('raioni')->where('id', $raion_id)->get();
                //$gorod = DB::table('goroda')->where('id', $gorod_id)->get();


                return view('index', [
                    'allQuestion' => $allQuestion,
                    //'region' => $region,
                    //'raion' => $raion,
                    //'gorod' => $gorod,
                        ]
                );
            } else {
                $allQuestion = Questions::with('gorods')
                        ->with('raions')
                        ->with('regions')
                        ->with('users')
                        ->with('comments')
                        ->withCount(['bookmark' => function ($query) {
                                $query->where('user_id', Auth::id());
                            }])
                            ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                        ->where('region_id', $region_id)
                        ->where('raion_id', $raion_id)
                        ->where('gorod_id', $gorod_id)
                        ->where('checked', 2)
                        ->where(function ($query) use ($pdd_item, $sing_item) {
                            $query->where('get_item_pdd', (int) $pdd_item)
                            ->orWhere('get_sing_pdd', (int) $sing_item);
                        })
                        ->orderBy('created_at', 'DESC')
                        ->paginate(10);

                //$region = DB::table('regions')->where('id', $region_id)->get();
                //$raion = DB::table('raioni')->where('id', $raion_id)->get();
                //$gorod = DB::table('goroda')->where('id', $gorod_id)->get();

                return view('index', [
                    'allQuestion' => $allQuestion,
                    //'region' => $region,
                    //'raion' => $raion,
                    //'gorod' => $gorod
                        ]
                );
            }
        } elseif ($region_id != null &&
                $raion_id != null
        ) {
            

            if ($pdd_item == null && $sing_item == null) {

                $allQuestion = Questions::with('gorods')
                        ->with('raions')
                        ->with('regions')
                        ->with('users')
                        ->with('comments')
                        ->withCount(['bookmark' => function ($query) {
                                $query->where('user_id', Auth::id());
                            }])
                            ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                        ->where('region_id', $region_id)
                        ->where('raion_id', $raion_id)
                        ->where('checked', 2)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(10);
            } else {
                $allQuestion = Questions::with('gorods')
                        ->with('raions')
                        ->with('regions')
                        ->with('users')
                        ->with('comments')
                        ->withCount(['bookmark' => function ($query) {
                                $query->where('user_id', Auth::id());
                            }])
                            ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                        ->where('region_id', $region_id)
                        ->where('raion_id', $raion_id)
                        ->where('checked', 2)
                        ->where(function ($query) use ($pdd_item, $sing_item) {
                            $query->where('get_item_pdd', (int) $pdd_item)
                            ->orWhere('get_sing_pdd', (int) $sing_item);
                        })
                        ->orderBy('created_at', 'DESC')
                        ->paginate(10);
            }



            //$region = DB::table('regions')->where('id', $region_id)->get();
            //$raion = DB::table('raioni')->where('id', $raion_id)->get();



            return view('index', [
                'allQuestion' => $allQuestion,
                //'region' => $region,
                //'raion' => $raion,
                    ]
            );
        } elseif ($region_id != null
        ) {
            
            if ($pdd_item == null && $sing_item == null) {


                $allQuestion = Questions::with('gorods')
                        ->with('raions')
                        ->with('regions')
                        ->with('users')
                        ->with('comments')
                        ->withCount(['bookmark' => function ($query) {
                                $query->where('user_id', Auth::id());
                            }])
                            
                               ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                        ->where('region_id', $region_id)
                        ->where('checked', 2)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(10);

                return view('index', [
                    'allQuestion' => $allQuestion,
                ]);
            } else {
                
                //int для того что бы null не попало в выборку

                if ((int) $pdd_item || (int) $sing_item) {

                    
                    $allQuestion = Questions::with('gorods')
                            ->with('raions')
                            ->with('regions')
                            ->with('users')
                            ->with('comments')
                            ->withCount(['bookmark' => function ($query) {
                                    $query->where('user_id', Auth::id());
                                }])
                                ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                            ->where('region_id', $region_id)
                            ->where('checked', 2)
                            ->where(function ($query) use ($pdd_item, $sing_item) {
                                $query->where('get_item_pdd', (int) $pdd_item)
                                ->orWhere('get_sing_pdd', (int) $sing_item);
                            })
                            ->orderBy('created_at', 'DESC')
                            ->paginate(10);

                    return view('index', [
                        'allQuestion' => $allQuestion,
                    ]);
                } else {
                    
                    $allQuestion = Questions::with('gorods')
                            ->with('raions')
                            ->with('regions')
                            ->with('users')
                            ->with('comments')
                            ->withCount(['bookmark' => function ($query) {
                                    $query->where('user_id', Auth::id());
                                }])
                                ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                            ->where('checked', 2)
                            ->orderBy('created_at', 'DESC')
                            ->paginate(10);

                    return view('index', [
                        'allQuestion' => $allQuestion,
                    ]);
                }
            }
        } else {
            
            if ((int) $pdd_item || (int) $sing_item) {
                $allQuestion = Questions::with('gorods')
                        ->with('raions')
                        ->with('regions')
                        ->with('users')
                        ->with('comments')
                        ->withCount(['bookmark' => function ($query) {
                                $query->where('user_id', Auth::id());
                            }])
                            ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                        ->where('checked', 2)
                        ->where(function ($query) use ($pdd_item, $sing_item) {
                            $query->where('get_item_pdd', (int) $pdd_item)
                            ->orWhere('get_sing_pdd', (int) $sing_item);
                        })
                        ->orderBy('created_at', 'DESC')
                        ->paginate(10);

                return view('index', [
                    'allQuestion' => $allQuestion,
                ]);
            } else {
                
               
                $allQuestion = Questions::with('gorods')
                        ->with('raions')
                        ->with('regions')
                        ->with('users')
                        ->with('comments')
                        ->withCount(['bookmark' => function ($query) {
                                $query->where('user_id', Auth::id());
                            }])
                            
                            ->where(function ($query) use ($violator) {
                                if($violator == 'on') {
                                     $query->where('violator', '=', 1);
                                }    
            })
                            
            
                        ->where('checked', 2)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(10);

                return view('index', [
                    'allQuestion' => $allQuestion,
                ]);
            }
        }
    }

    public function resetGorod() {
        return redirect('/')->withCookie(Cookie::forget('region_id'))
                        ->withCookie(Cookie::forget('raion_id'))
                        ->withCookie(Cookie::forget('gorod_id'))
                        ->withCookie(Cookie::forget('pdd_item'))
                        ->withCookie(Cookie::forget('sing_item'))
                        ->withCookie(Cookie::forget('violator'));
    }

    public function add() {
           
        $regions = DB::table('regions')->get();

        $itemsPdd = ItemsPdd::all();
        $categorySing = CategorySing::all();
        $categorMarkings = CategoryRoadMarking::all();
        $categorPermissions = CategoryPermission::all();


        return view('add_question', [
            'regions' => $regions,
            'itemsPdd' => $itemsPdd,
            'categorySing' => $categorySing,
            'categorMarkings' => $categorMarkings,
            'categorPermissions' => $categorPermissions
        ]);
    }

    public function showRaionById($id) {
        $raions = DB::table('raioni')->where('region_id', $id)->get();
        return $raions->toArray();
    }

    public function showGorodById($id) {
        $goroda = DB::table('goroda')->where('raion_id', $id)->get();
        return $goroda->toArray();
    }

    public function storeQuestion(Request $request) {
        //https://github.com/Intervention/image/issues/376
        
        
       
        
        //dd($request->all());
        

        $rules = [
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'question_description' => 'required',
            'var1' => 'required',
            'var2' => 'required',
            'get_raion' => 'required',
            'get_goroda' => 'required',
            'answer' => 'required',
        ];

        $messages = [
            'image.required' => 'Изображение загружать обязательно.',
            'question_description.required' => 'Введите вопрос',
            'image.image' => 'Вы загрузили не изображение.',
            'image.mimes' => 'Допустимые форматы: jpg, jpeg, png.',
            'var1.required' => 'Обязательно укажите 1-ый вариант ответа',
            'var2.required' => 'Обязательно укажите 2-ой вариант ответа',
            'get_raion.required' => 'Выберите регион',
            'get_goroda.required' => 'Выберите район',
            'answer.required' => 'Выберите правильный ответ',
        ];

        Validator::make(
                $request->all(), $rules, $messages
        )->validate();

      
        Storage::makeDirectory('uploads/images/id' . Auth::id());

        $image = $request->file('image');
 
        $img700 = \Intervention\Image\Facades\Image::make($image)->resize(900, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        
        $img700->insert('img/url.png', 'bottom-right', 60, 15);
 
        $imgOriginal = \Intervention\Image\Facades\Image::make($image)->resize(900, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $imgOriginal->save('uploads/images/id' . Auth::id() . '/sdgfsfgg6326ggas33ghaj888' . time() . '.jpg');

        $img700->save('uploads/images/id' . Auth::id() . '/' . time() . '.jpg');

        $question = new Questions;
        $question->images = 'uploads/images/id' . Auth::id() . '/' . $img700->basename;
        $question->region_id = $request->get_raion;
        $question->raion_id = $request->get_goroda;
        $question->gorod_id = $request->get_mesto;
        $question->description = $request->question_description;

        $question->get_item_pdd = $request->get_item_pdd;
        $question->get_sub_item_pdd = $request->get_sub_item_pdd;
        $question->get_sing_pdd = $request->get_sing_pdd;
        $question->sing_pdd = $request->sing_pdd;
        $question->get_marking_pdd = $request->get_marking_pdd;
        $question->marking_pdd = $request->marking_pdd;
        $question->get_permission_pdd = $request->get_permission_pdd;
        $question->permission_pdd = $request->permission_pdd;


        $question->variant1 = $request->var1;
        $question->variant2 = $request->var2;
        $question->variant3 = $request->var3;
        $question->variant4 = $request->var4;
        $question->answer = $request->answer;
        $question->coordinates = $request->coordinates;
        

        
          if($request->additional_comment != null) {
            $question->additional_comment = $request->additional_comment;
        }
        if($request->violator != null) {
            $question->violator = 1;
        }
        
        $question->user_id = Auth::id();
        $question->last_login_ip = $request->getClientIp();
        $question->save();


        return redirect('/question/' . $question->id);
    }

    //сделать свои проверки на заполненые инпуты

    public function updateQuestion(Request $request) {
        //https://github.com/Intervention/image/issues/376
        
       //dd($request->all());
        
        //сделать проверку, что у района есть город или улица
        //почему то если убрать проверку изображения, то вся валидация не работает


        $rules = [
            'question_description' => 'required',
            'var1' => 'required',
            'var2' => 'required',
            'get_raion' => 'required',
            'get_goroda' => 'required',
        ];

        $messages = [
            'question_description.required' => 'Введите вопрос',
            'var1.required' => 'Обязательно укажите 1-ый вариант ответа',
            'var2.required' => 'Обязательно укажите 2-ой вариант ответа',
            'get_raion.required' => 'Выберите регион',
            'get_goroda.required' => 'Выберите район',
        ];

        Validator::make(
                $request->all(), $rules, $messages
        )->validate();

        $oldQuestion = $this->getQuestionById($request->question_id);
        //dd($oldQuestion);

        if ($request->file('image')) {
            $image = $request->file('image');

            $img700 = \Intervention\Image\Facades\Image::make($image)->resize(900, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img700->insert('img/url.png', 'bottom-right', 60, 15);

            $imgOriginal = \Intervention\Image\Facades\Image::make($image)->resize(900, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $imgOriginal->save('uploads/images/id' . Auth::id() . '/sdgfsfgg6326ggas33ghaj888' . time() . '.jpg');

            $img700->save('uploads/images/id' . Auth::id() . '/' . time() . '.jpg');


            //надо разобраться с правами
            Storage::delete($oldQuestion->images);


            //$oldQuestion->images = $img700;
            $oldQuestion->images = 'uploads/images/id' . Auth::id() . '/' . $img700->basename;
        }

        $oldQuestion->region_id = $request->get_raion;
        $oldQuestion->raion_id = $request->get_goroda;
        $oldQuestion->gorod_id = $request->get_mesto;
        $oldQuestion->description = $request->question_description;

        $oldQuestion->get_item_pdd = $request->get_item_pdd;
        $oldQuestion->get_sub_item_pdd = $request->get_sub_item_pdd;
        $oldQuestion->get_sing_pdd = $request->get_sing_pdd;
        $oldQuestion->sing_pdd = $request->sing_pdd;
        $oldQuestion->get_marking_pdd = $request->get_marking_pdd;
        $oldQuestion->marking_pdd = $request->marking_pdd;
        $oldQuestion->get_permission_pdd = $request->get_permission_pdd;
        $oldQuestion->permission_pdd = $request->permission_pdd;


        $oldQuestion->variant1 = $request->var1;
        $oldQuestion->variant2 = $request->var2;
        $oldQuestion->variant3 = $request->var3;
        $oldQuestion->variant4 = $request->var4;
        $oldQuestion->answer = $request->answer;
        $oldQuestion->coordinates = $request->coordinates;
        $oldQuestion->additional_comment = strip_tags($request->additional_comment, '<br>');
        $oldQuestion->violator = null;
        
        $oldQuestion->checked = 1;
        $oldQuestion->last_login_ip = $request->getClientIp();
        $oldQuestion->save();

        return redirect('/question/' . $oldQuestion->id);
    }

    public function editQuestion($id) {
        $question = $this->getQuestionById($id);

        if ($question != null) {
            if ($question->user_id == Auth::id()) {
                $regions = DB::table('regions')->get();

                $itemsPdd = ItemsPdd::all();
                $categorySing = CategorySing::all();
                $categorMarkings = CategoryRoadMarking::all();
                $categorPermissions = CategoryPermission::all();

                //dd($question);

                return view('edit_question', [
                    'question' => $question,
                    'regions' => $regions,
                    'itemsPdd' => $itemsPdd,
                    'categorySing' => $categorySing,
                    'categorMarkings' => $categorMarkings,
                    'categorPermissions' => $categorPermissions
                ]);
            }
        }




        return abort(404);
    }

    //зачем этот метод?

    public function getQuestionById($id) {

        $question = Questions::find($id);
        return $question;
    }

    public function chooseCity() {
        $regions = DB::table('regions')->get();
        return $regions;
    }
    
    
    
    //Этот метод можно вообще убрать и сразу создать все куки по умолчанию
    public function saveCity(Request $request) {
        //dd($request->all());
        $raion = $request->get_raion;
        $gorod = $request->get_goroda;
        $mesto = $request->get_mesto;

        $category_pdd = $request->category_pdd;
        $category_pdd = explode('|', $category_pdd);
        
        
        //можно сразу записыватьи потом уже сделать условие 
        $violator = $request->violator;
        $cookieViolator = Cookie::make('violator', $violator, time() + 60 * 60 * 24 * 365);
        

        if ($raion != null &&
                $gorod != null &&
                $mesto != null
        ) {
            

            $cookie = Cookie::make('region_id', $raion, time() + 60 * 60 * 24 * 365);
            $cookie2 = Cookie::make('raion_id', $gorod, time() + 60 * 60 * 24 * 365);
            $cookie3 = Cookie::make('gorod_id', $mesto, time() + 60 * 60 * 24 * 365);

            return redirect('/')
                            ->withCookie($cookie)
                            ->withCookie($cookie2)
                            ->withCookie($cookie3)
                            ->withCookie($cookieViolator);
        } elseif (($raion != null &&
                $gorod != null) || $request->cookie('region_id') && $request->cookie('raion_id')
        ) {

            //dd(777777);
            //это условие дублируется
            if (count($category_pdd) > 1) {
                $category = $category_pdd[0];
                $item = $category_pdd[1];


                if ($category == 'pdd') {
                    $cookiePdd = Cookie::make('pdd_item', $item, time() + 60 * 60 * 24 * 365);
                } elseif ($category == 'sing') {
                    $cookiePdd = Cookie::make('sing_item', $item, time() + 60 * 60 * 24 * 365);
                }
            }


            if (empty($raion) || empty($gorod)) {
                $raion = $request->cookie('region_id');
                $gorod = $request->cookie('raion_id');
            }

            $cookie = Cookie::make('region_id', $raion, time() + 60 * 60 * 24 * 365);
            $cookie2 = Cookie::make('raion_id', $gorod, time() + 60 * 60 * 24 * 365);


            if (!empty($category) && $category == 'pdd') {


                return redirect('/')
                                ->withCookie($cookie)
                                ->withCookie($cookie2)
                                //->withCookie(Cookie::forget('gorod_id'))
                                ->withCookie($cookiePdd)
                                ->withCookie(Cookie::forget('sing_item'))
                                 ->withCookie($cookieViolator);
            } elseif (!empty($category) && $category == 'sing') {


                return redirect('/')
                                ->withCookie($cookie)
                                ->withCookie($cookie2)
                                //->withCookie(Cookie::forget('gorod_id'))
                                ->withCookie($cookiePdd)
                                ->withCookie($cookieViolator)
                                ->withCookie(Cookie::forget('pdd_item'));
            } else {
                
                return redirect('/')
                                ->withCookie($cookie)
                                ->withCookie($cookie2)
                                ->withCookie($cookieViolator);;
            }
        } elseif ($raion != null) {


            if (count($category_pdd) > 1) {
                $category = $category_pdd[0];
                $item = $category_pdd[1];


                if ($category == 'pdd') {
                    $cookiePdd = Cookie::make('pdd_item', $item, time() + 60 * 60 * 24 * 365);
                } elseif ($category == 'sing') {
                    $cookiePdd = Cookie::make('sing_item', $item, time() + 60 * 60 * 24 * 365);
                }
            }


            $cookie = Cookie::make('region_id', $raion, time() + 60 * 60 * 24 * 365);


            if (!empty($category) && $category == 'pdd') {

                return redirect('/')
                                ->withCookie($cookie)
                                ->withCookie(Cookie::forget('raion_id'))
                                ->withCookie(Cookie::forget('gorod_id'))
                                ->withCookie($cookiePdd)
                                ->withCookie($cookieViolator)
                                ->withCookie(Cookie::forget('sing_item'));
            } elseif (!empty($category) && $category == 'sing') {

                return redirect('/')
                                ->withCookie($cookie)
                                ->withCookie(Cookie::forget('raion_id'))
                                ->withCookie(Cookie::forget('gorod_id'))
                                ->withCookie($cookiePdd)
                                ->withCookie($cookieViolator)
                                ->withCookie(Cookie::forget('pdd_item'));
            } else {
                
                return redirect('/')
                                ->withCookie($cookie)
                                ->withCookie($cookieViolator)
                                ->withCookie(Cookie::forget('raion_id'))
                                ->withCookie(Cookie::forget('gorod_id'));
            }
        } elseif (count($category_pdd) > 1) {

           
            $category = $category_pdd[0];
            $item = $category_pdd[1];


            if ($category == 'pdd') {
                $cookiePdd = Cookie::make('pdd_item', $item, time() + 60 * 60 * 24 * 365);
                return redirect('/')
                                ->withCookie($cookiePdd)
                                ->withCookie($cookieViolator)
                                ->withCookie(Cookie::forget('sing_item'));
            } elseif ($category == 'sing') {
                $cookiePdd = Cookie::make('sing_item', $item, time() + 60 * 60 * 24 * 365);
                return redirect('/')
                                ->withCookie($cookiePdd)
                                 ->withCookie($cookieViolator)
                                ->withCookie(Cookie::forget('pdd_item'));
            }
        }
        
        elseif($violator == 'on') {
              return redirect('/')->withCookie($cookieViolator);
        }

        return back();
    }

    public function checkAnswer($id, Request $request) {

        $targetQuestion = $this->getQuestionById($id);

        if ($targetQuestion->answer == $request['answer']) {
            return 1;
        } else {
            return 2;
        }
    }

    public function myQuestions() {

        $allQuestion = Questions::with('gorods')
                ->with('raions')
                ->with('regions')
                ->with('users')
                ->withCount(['bookmark' => function ($query) {
                        $query->where('user_id', Auth::id());
                    }])
                ->where('user_id', Auth::id())
                ->orderBy('created_at', 'DESC')
                ->paginate(5);


        return view('index', [
            'allQuestion' => $allQuestion
                ]
        );
    }

    public function userQuestions($id) {
        $user = User::find($id);

        $allQuestion = Questions::with('gorods')
                ->with('raions')
                ->with('regions')
                ->with('users')
                ->withCount(['bookmark' => function ($query) {
                        $query->where('user_id', Auth::id());
                    }])
                ->where('user_id', $id)
                ->orderBy('created_at', 'DESC')
                ->paginate(5);


        return view('index', [
            'user' => $user,
            'allQuestion' => $allQuestion
                ]
        );
    }

    public function deleteQuestion($id) {

        //сделать проверку, что вопрос
        //пренадлежит к юзеру



        $question = $this->getQuestionById($id);



        if ($question != null) {

            if ($question->user_id == Auth::id()) {

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

    public function bookmarkAdd(Request $request) {


        if (Auth::check()) {

            $user = User::find(Auth::id());

            $aaa = DB::table('questions_user')
                    ->where('user_id', Auth::id())
                    ->where('questions_id', $request->idQuestion)
                    ->get();

            if ($aaa->isEmpty()) {
                $user->questions()->attach($request->idQuestion);
                return 1;
            } else {
                $user->questions()->detach($request->idQuestion);
                return 2;
            }
        }



        return 3;
    }

    public function bookmarkMy(Request $request) {

        $user = User::find(Auth::id());
        
        
        return view('my-profile', [
            'myBookmark' => $user->questions()
                    ->withCount(['bookmark' => function ($query) {
                            $query->where('user_id', Auth::id());
                        }])
                    ->paginate(5)
                ]
        );
    }

    /*
      public function showQuestionById($id)
      {

      $comments = Comment::with('users')->where('post_id', $id)->get();

      $question = Questions::with('gorods')
      ->with('raions')
      ->with('regions')
      ->with('users')
      ->with('itemPdd')
      ->with('subItemPdd')
      ->with('getSingPdd')
      ->with('getSing')
      ->with('getMarkingPdd')
      ->with('getMarking')
      ->with('getPermissionPdd')
      ->with('getPermission')
      ->withCount(['bookmark' => function ($query) {
      $query->where('user_id', Auth::id());
      }])
      ->where('id', $id)
      ->get()->first();

      return ['comments' => $comments, 'question' => $question];
      }
     */

    public function chooceShowQuestionById($id) {
       
        $comments = Comment::with('users')
                ->where('post_id', $id)
                ->where('checked', 2)
                ->get();

        $question = Questions::with('gorods')
                ->with('raions')
                ->with('regions')
                ->with('users')
                ->with('itemPdd')
                ->with('subItemPdd')
                ->with('getSingPdd')
                ->with('getSing')
                ->with('getMarkingPdd')
                ->with('getMarking')
                ->with('getPermissionPdd')
                ->with('getPermission')
                ->withCount(['bookmark' => function ($query) {
                        $query->where('user_id', Auth::id());
                    }])
                ->findOrFail($id);




        //dd($question);
        //сделать, вместо Auth::id() == 1 что бы проверялся админ

        $settingComment = Settings::where('id', 1)->where('title', 'comment')->first();


        if ($question->checked == 1 && ($question->user_id == Auth::id() || Auth::id() == 1)) {
            return view('comments', [
                'question' => $question,
                'comments' => $comments,
                'message' => 'Вопрос ещё не проверен, его видите только вы.',
                'commentDisable' => $settingComment->status,
                    ]
            );
        } elseif ($question->checked == 1 && $question->user_id != Auth::id()) {
            abort(404);
        } else {

            $countShow = DB::table('questions')
                    ->where('id', $id)
                    ->increment('number_of_views', 1);


            return view('comments', [
                'question' => $question,
                'comments' => $comments,
                'commentDisable' => $settingComment->status,
                    ]
            );
        }
    }

}
