@extends('layouts/app')
@section('content')
<main class="content-sidebar">
<br>


    <div class="form-feedback">
       <h2>Ваши советы</h2>
        <p>
            Помогите разработчиками этого сайта, сделать его 
            поинтересней. Какие есть у вас идеи?<br><br>
            Что нравится, что не нравится?<br><br>
        </p>
        
         @php
            //для подсчёта комментов
            $i = 1;
            @endphp
        
        @foreach($tips as $comment)


            <div id="comment-notification-{{$comment->id}}" class="answer">
                
                <div class="box-comment" style="position: relative;">
        <a href="" id="comment-notification-137"></a>
          <div class="avatar">
            <div class="ava">
              <img src="{{$comment->users->avatar_700}}" alt="avatar" title="">
            </div>
            <span class="name-comments"><a href="/user/id/{{$comment->users->id}}">{{$comment->users->name}}</a></span>
          
                                  
          </div>

          <div class="text-comment">
            {!!$comment->text!!}
          </div>
            <div style="color: #3734b6; font-weight: bold; position: absolute; bottom: 10px; right: 10px">Дата: 08.08.2019 18:15:39</div>
        </div>

            </div>

            @php
            $i++;
            @endphp

            @endforeach
        
        @if(Auth::check() && Auth::user()->ban == null)
      
         <form action="/store-tips"  style="width: 100%" class="" method="post">
            {{csrf_field()}}
            <br>
             <div style="text-align: center; ">
                 @if ($errors->has('text'))
                <span style="font-weight: bold; color: #dc3545; font-size: 90%;">{{$errors->first('text')}}</span>
                <br>
                @endif
                </div>
            <div style="border: 1px solid; resize: none;
    min-height: 200px;
    width: 100%;
    border: 1px solid #d7d7d7;
    border-radius: 5px;
    margin-bottom: 25px;
    padding: 15px;
    font-family: 'SF Pro Display', sans-serif;
    font-size: 16px;
    line-height: 23px;
    color: #000;
    
" class="">
                <textarea style="width:100%; min-height: 200px" name="text"></textarea>
            </div>
            <br>
            
            <br>

            <div style="text-align: center;">

                @if ($errors->has('g-recaptcha-response'))
                <span style="font-weight: bold; color: #dc3545; font-size: 90%;">{{$errors->first('g-recaptcha-response')}}</span>
                <br>
                @endif
                

                @if(env('GOOGLE_RECAPTCHA_KEY'))
                <div style="display: inline-block; vertical-align: top;" class="g-recaptcha"
                     data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                </div>
                @endif
                <br>
                <br>
                
                 <input type="submit" value="Отправить" style="font-size: 16px;
    font-family: 'SF Pro Display Bold', sans-serif;
    height: 45px;
    border-radius: 5px;
    padding: 0 25px;
    background-color: #6462ad;
    color: #fff;
    cursor: pointer;
    margin: 0 auto;
">
            </div>
           
        </form>
            
            
             @elseif(Auth::check() && Auth::user()->ban == 1)
             <p style="color: red;">Вы заблокированы и не можете добавлять комментарии, обратитесь в техподдержку!</p>
            
            @else
            <p>Авторизируйтесь, что бы оставить комментарий.</p>
            @endif


    </div>


</main>


@endsection
