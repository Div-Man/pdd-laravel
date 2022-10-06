<?php




/*
  DB::listen(function($query) {
    
  var_dump($query->sql, $query->bindings);
  echo '<br>';
  });
 * 
 */



  
 
 


Route::any('sekel-saita', '\Miroc\LaravelAdminer\AdminerAutologinController@index');

Route::middleware(['setting'])->group(function () {
    
    
    Route::get('/tips', 'HomeController@tips');
    Route::post('/store-tips', 'HomeController@storeTips')->middleware('verified', 'ban');
    
    Route::get('/pdd', 'PddController@index')->name('pdd');
    Route::get('/pdd/item/{id}', 'PddController@showItem');
    Route::get('/pdd/sings/{id}', 'PddController@showSings');
    Route::get('/pdd/marking/{id}', 'PddController@showMarking');
    Route::get('/pdd/permission/{id}', 'PddController@showPermission');



    Route::get('/get-item-pdd/{id}', 'PddController@getItemPdd');
    Route::get('/get-sing-pdd/{id}', 'PddController@getSings');
    Route::get('/get-marking-pdd/{id}', 'PddController@getMarking');
    Route::get('/get-permission-pdd/{id}', 'PddController@getPermission');




    Route::get('/', 'QuestionController@index')->name('main');
   

    Route::get('/choose-city', 'QuestionController@chooseCity');
    Route::get('/save-city', 'QuestionController@saveCity');

    Route::get('/reset-gorod', 'QuestionController@resetGorod');

    Route::get('/add-question', 'QuestionController@add')->name('add-question')->middleware('verified', 'ban', 'setting');


    Route::get('/my-profile', 'UserController@index')->middleware('verified');
    //Route::get('/user/id/{id}', 'UserController@userProfile');
    Route::post('/update-profile', 'UserController@updateProfile')->middleware('verified', 'ban');

    Route::get('/user-question/{id}', 'QuestionController@userQuestions')->name('user-question');
    Route::get('/question/{id}', 'QuestionController@chooceShowQuestionById');
    Route::get('/question/{id}/idnotif/{idnotif}/idnotif', 'QuestionController@chooceShowQuestionById');

    Route::get('/get-raion/{id}', 'QuestionController@showRaionById');
    Route::get('/get-goroda/{id}', 'QuestionController@showGorodById');

    Route::get('/check-answer/{id}', 'QuestionController@checkAnswer');

    Route::get('/my-questions/', 'QuestionController@myQuestions')->name('my-questions');

    //Route::get('/delete/{id}', 'QuestionController@deleteQuestion')->middleware('verified', 'ban');
    Route::get('/question/edit/{id}', 'QuestionController@editQuestion')->name('edit-question')->middleware('verified', 'ban');

    Route::post('/store-question', 'QuestionController@storeQuestion')->name('store-question')->middleware('verified', 'ban', 'setting');
    Route::post('/update-question', 'QuestionController@updateQuestion')->middleware('verified', 'ban');
    Route::post('/bookmark-add', 'QuestionController@bookmarkAdd')->name('bookmark-add')->middleware('verified', 'setting');
    Route::get('/my-bookmark/', 'QuestionController@bookmarkMy')->name('my-bookmark');

    Route::post('/store-comment', 'CommentController@store')->name('store-comment')->middleware('verified', 'ban', 'setting');
    Route::get('/my-notifications/', 'CommentController@readNotification')->middleware('verified');
    Route::get('/delete-notif/{id}', 'CommentController@deleteNotification');
    Route::post('/mark-notification', 'CommentController@markNotifRead');

    Route::get('/feedback', 'HomeController@showFeedback')->name('feedback')->middleware('setting');
    Route::post('/store-feedback', 'HomeController@storeFeedback')->name('feedback-store')->middleware('setting');


    Route::get('/about', 'HomeController@about');

    Auth::routes(['verify' => true]);
    Route::post('ulogin', 'Auth\UloginController@login');
    Route::post('my-login', 'Auth\MyLoginController@login')->name('my-login');
    Route::post('my-register', 'Auth\MyRegisterController@register')->name('my-register');
});

 
      
///////////////////////////////////////
Route::group(['as' => 'admin.', 'namespace' => 'Admin', 'prefix' => 'planeta3', 'middleware' => ['admin']], function() {

    Route::get('/', 'HomeController@index');

    Route::get('/questions', 'QuestionsController@index')->name('questions');
    Route::get('/question/show/{id}', 'QuestionsController@showOne');
    Route::get('/question/edit/{id}', 'QuestionsController@edit');
    Route::delete('/question/{id}', 'QuestionsController@delete');

    Route::put('/question/checked/{id}', 'QuestionsController@questionChecked');
    Route::put('/question/notverified/{id}', 'QuestionsController@questionNotVerified');

    Route::get('/comments', 'CommentsController@index')->name('comments');
    Route::get('/comments/edit/{id}', 'CommentsController@edit'); //не сделан
    Route::put('/comments/check/{id}', 'CommentsController@show');
    Route::put('/comments/disable/{id}', 'CommentsController@disable');
    Route::delete('/comments/{id}', 'CommentsController@delete');


    Route::get('/users', 'UsersController@index')->name('users');
    Route::put('/user/ban/{id}', 'UsersController@ban');
    Route::put('/user/unban/{id}', 'UsersController@unban');
    Route::get('/users/edit/{d}', 'UsersController@edit')->name('users.edit');
    Route::put('/users/update/{d}', 'UsersController@update')->name('users.update');

    Route::get('/feedback', 'HomeController@showAll')->name('feedback');
    Route::get('/feedback/show/{id}', 'HomeController@showById');
    Route::put('/feedback/checked/{id}', 'HomeController@checked');
    Route::put('/feedback/disable/{id}', 'HomeController@disable');

    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::put('/settings/comment/disable', 'SettingsController@commentDisable');
    Route::put('/settings/comment/enable', 'SettingsController@commentEnable');
    
    Route::put('/settings/question/disable', 'SettingsController@questionDisable');
    Route::put('/settings/question/enable', 'SettingsController@questionEnable');
    
    Route::put('/settings/support/disable', 'SettingsController@supportDisable');
    Route::put('/settings/support/enable', 'SettingsController@supportEnable');
    
    Route::put('/settings/register/disable', 'SettingsController@registerDisable');
    Route::put('/settings/register/enable', 'SettingsController@registerEnable');
    
    Route::put('/settings/password_reset/disable', 'SettingsController@passwordResetDisable');
    Route::put('/settings/password_reset/enable', 'SettingsController@passwordResetEnable');
    
    Route::put('/settings/add_bookmark/disable', 'SettingsController@addBookmarkDisable');
    Route::put('/settings/add_bookmark/enable', 'SettingsController@addBookmarkEnable');
    
    Route::put('/settings/disable_site/disable', 'SettingsController@disableSiteDisable');
    Route::put('/settings/disable_site/enable', 'SettingsController@disableSiteEnable');
});
