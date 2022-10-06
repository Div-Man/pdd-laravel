@extends('layouts/app')
@section('content')


  <div class="container">
      
        @php
    $peremenayaForRadioName = 1;
    @endphp
    
   
    
    <div class="box-question">
        
         @isset($message)
    <p style="color: red; font-weight: bold; text-align: center; font-size: 15px; margin-bottom: 20px;">{{$message}}</p>
    @endisset
      <div class="box-title-question">
        <p>Вопрос <strong><span class="question-id">{{$question->id}}</span></strong></p>
        <input type="checkbox" title="" id="check-info-1"/>
        <label for="check-info-1" class="icon-info">
          <img src="/img/icons/icon-17.png" alt="icon" title=""/>
        </label>
        <div class="box-info">
          <span class="address">{{$question->regions->first()->name_region}}, {{$question->raions->first()->raion_name}} @if($question->gorods->first()), {{$question->gorods->first()->gorod_name}}@endif </span>
          <span class="data">{{ Carbon\Carbon::parse($question->created_at)->format('d.m.Y')}}</span>
          <span class="name">{{$question->users->first()->name}}</span>
          <span class="view">{{$question->number_of_views}}</span>
        </div>
      </div>
      <div class="question-img">
        <img src="/{{$question->images}}" alt="" title=""/>
      </div>
      <div class="question">
        <div class="text-question">
          <p>{{$question->description}}</p>
          <span class="otvet"></span>
        </div>
        <div class="options">
          <input type="hidden" value="{{$question->id}}" class="questionId" name="questionId">
          
          <input type="radio" name="r-1" id="radio-{{$peremenayaForRadioName}}" value="1" title=""/>
          <label for="radio-{{$peremenayaForRadioName}}" class="true-answer">{{$question->variant1}}</label>
          <input type="radio" name="r-1" id="radio2-{{$peremenayaForRadioName}}" value="2" title=""/>
          <label for="radio2-{{$peremenayaForRadioName}}" class="true-answer">{{$question->variant2}}</label>
         @isset($question->variant3)
          <input type="radio" name="r-1" id="radio3-{{$peremenayaForRadioName}}" value="3" title=""/>
          <label for="radio3-{{$peremenayaForRadioName}}" class="true-answer">{{$question->variant3}}</label>  
           @endisset

           @isset($question->variant4)
            <input type="radio" name="r-1" id="radio4-{{$peremenayaForRadioName}}" value="4" title=""/>
          <label for="radio4-{{$peremenayaForRadioName}}" class="true-answer">{{$question->variant4}}</label>
         @endisset
        
        
        
        </div>
        <div class="additionally">
          <button class="button-answer">Показать ответ</button>
          <div>
              
              @if($question->bookmark_count)
                     <button type="button" data-bookmark="{{$question->id}}" class="bookmark">Удалить из закладок</button>
                         @else 
                                <button type="button" data-bookmark="{{$question->id}}" class="bookmark">Добавить в закладки</button>     
                          @endif 
              
            <!--<button type="button">Добавить в закладки</button>-->
            <a href="/question/{{$question->id}}">{{$question->comments->count()}} комментарий</a>
          </div>
        </div>
      </div>
    <br>
        <div class="answer answer-index">
        <h5>Пункты ПДД</h5>
        
        
        <div>
            
            @if($question->subItemPdd->first())
            <h4 style="margin-bottom: 10px;">{!!$question->itemPdd->first()['text']!!}</h4>       
            <b>{!!$question->subItemPdd->first()['title']!!}</b> {!!$question->subItemPdd->first()['text']!!}
            <br>
            <div style="border-top: 1px solid; margin: 10px 0;"></div>
            @endif

            @if($question->getSing->first())
             <h4 style="margin-bottom: 10px;">{!!$question->getSingPdd->first()['title']!!}</h4>
            <b>{!!$question->getSing->first()['numeral']!!}</b> <img width="50px" src="{{$question->getSing->first()['url']}}"> {!!$question->getSing->first()['title']!!}. {!!$question->getSing->first()['text']!!}
             <div style="border-top: 1px solid; margin: 10px 0;"></div>
           
            @endif


            @if($question->getMarking->first())
              <h4 style="margin-bottom: 10px;">{!!$question->getMarkingPdd->first()['title']!!}</h4>
            <b>{!!$question->getMarking->first()['numeral']!!}</b>  <img width="120px" src="{{$question->getMarking->first()['url']}}"> {!!$question->getMarking->first()['title']!!}. {!!$question->getMarking->first()['text']!!}       
              <div style="border-top: 1px solid; margin: 10px 0;"></div>
            @endif 

            @if($question->getPermission->first())
            <h4 style="margin-bottom: 10px;">{!!$question->getPermissionPdd->first()['title']!!}</h4>
            <b>{!!$question->getPermission->first()['numeral']!!} {!!$question->getPermission->first()['title']!!}</b> {!!$question->getPermission->first()['text']!!}
            <div style="border-top: 1px solid; margin: 10px 0;"></div>
            @endif
        </div>
        <br>
      @if($question->additional_comment)
             <h5>Дополнительный комментарий</h5>
        <div class="box-comment">
            <div class="avatar">
                <div class="ava">
                    <img src="{{$question->users->first()->avatar_700}}" alt="avatar" title=""/>
                </div>
                <span class="name-comments">{{$question->users->first()->name}}</span>
            </div>
            <div class="text-comment">
                <p>
                    {!!$question->additional_comment!!}
                </p>
            </div>
        </div>
             <br>
        @endif


      </div>
    
     <div style="margin: auto;" id="map"></div>

<script>
 
//Определяем карту, координаты центра и начальный масштаб
var map = L.map('map').setView([{{$question->coordinates}}], 16);
 
//Добавляем на нашу карту слой OpenStreetMap
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a rel="nofollow" href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([{{$question->coordinates}}]).addTo(map);





L.marker([{{$question->coordinates}}]).addTo(map).on('click', onClick);

function onClick(e) {
    alert('Координаты: ' + this.getLatLng());
}
 
</script>
 
<br>
    @php
            //для подсчёта комментов
            $i = 1;
            @endphp
    
    
     <div class="">
 <h5 style="
    font-family: 'SF Pro Display Bold', sans-serif;
    color: #000;
    font-size: 24px;
    margin-bottom: 20px;
">Комментарии пользователей</h5>
 
  @foreach($comments as $comment)
 
   <div class="box-comment" style="position: relative;">
        <a href="" id="comment-notification-{{$comment->id}}"></a>
          <div class="avatar">
            <div class="ava">
              <img src="{{$comment->users->avatar_700}}" alt="avatar" title=""/>
            </div>
            <span class="name-comments"><a href="/user/id/{{$comment->users->id}}">{{$comment->users->name}}</a></span>
          
             @if($comment->users->ban == 1)           
             <span style="color: red; font-weight: bold; margin-top: 10px;">Заблокирован</span>
               @endif
                      
          </div>

          <div class="text-comment" >
            {!!$comment->text!!}
            <div style="color: #3734b6; margin-top: 5px; font-weight: bold">Дата: {{ Carbon\Carbon::parse($comment->created_at)->format('d.m.Y H:i:s') }}</div>
            <br>
             <br>
            <!--<button type="button" onclick="addComment()"><span>Ответит</span>ь</button>-->
             
              <div style="text-align: right;">
                @if(Auth::id() != $comment->user_id && Auth::check() && Auth::user()->ban == null)
                 <div style="position: absolute; bottom:0; padding: 10px; right:0;" class="reply"><a data-user-name="{{$comment->users->name}}" data-user-id="{{$comment->user_id}}" href="#" onclick="return false;" onmousedown="autoScrollTo('anchor');">Ответить</a></div>
                @endif
            </div>
            
          </div>

    
        </div>
  <br>
  @endforeach
  
   @if(Auth::check() && Auth::user()->ban == null && $commentDisable != null)
            
                <p>Добавление комментариев, временно отключено.</p>
         @elseif(Auth::check() && Auth::user()->ban == null)
         
         
         <!--
         @if(session()->has('addComment'))
                <div class="alert-success">
                    {{ session()->get('addComment')}}
                </div>
            @endif-->
      <form method="post" action="/store-comment" class="add-user-comment add-comment" id="add-comment" enctype="multipart/form-data">
                {{csrf_field()}} 
                 <input name="post_id" type="hidden" value="{{$question->id}}">
                 
                  <!-- id юзера который создал тему, он нужен для уведомлений-->
                <input name="user_post_id" type="hidden" value="{{$question->users->first()->id}}">
                <input name="reply_user_id" class="reply-user-id" type="hidden" value="">
                 
                <div id="anchor"></div>
                
                
    
             
            
                
              <p>Ваш комментарий:</p>
              @if ($errors->has('text'))
                                    <span style="color: red; font-weight: bold;">{{$errors->first('text')}}</span>
                                @endif
                                <textarea name="text" style="display:none;" class="copy-write-comment">{{old('text')}}</textarea>
              <br>
                                <p style="
                                  width: calc(100% - 30px);
                                min-height: 70px;
                                padding: 15px;
                                border: 1px solid #d7d7d7;
                                border-radius: 5px;
                                margin: 5px 0 25px;
                                resize: none;
                                font-family: "SF Pro Display", sans-serif;
                                font-size: 16px;
                                color: #000;

                                   contenteditable="true" class="write-comment">{{old('text')}}</p>
                              
                                <input type="submit" value="Отправить комментарий"/>
            </form>
         
          @elseif(Auth::check() && Auth::user()->ban == 1)
             <p style="color: red;">Вы заблокированы и не можете добавлять комментарии, обратитесь в техподдержку!</p>
            
            @else
            <p>Авторизируйтесь, что бы оставить комментарий.</p>
            @endif
    </div>
    
    </div>
    </div>
   
    <script>
        
        function autoScrollTo(el) {
    var top = $("#" + el).offset().top;
    $("html, body").animate({ scrollTop: top }, 1000);
}



        var href = location.href;
        var arr = href.split('idnotif/');


        if (arr[1] != undefined) {
            var arr2 = arr[1].split('/idnotif');
            console.log(arr2);


            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'post',
                url: '/mark-notification',
                dataType: 'json',
                data: {idComment: arr2[0]},
                success: function (result) {


                    console.log(result);

                },

                error: function () {
                    //addBookmark[j].innerHTML = 'Ошибка';

                }

            });



            var countNotif = document.querySelector('.count-notif');
            console.log(countNotif);

            var resultNotif = countNotif.innerHTML - 1;

            if (resultNotif > 0) {
                countNotif.innerHTML = (countNotif.innerHTML - 1);
            } else {
                countNotif.innerHTML = 0;
            }

        }



    /////////////////////////////////////////////////////

        var reply = document.querySelectorAll('.reply');
        var formComment = document.querySelector('.write-comment');
        var formCommentCopy = document.querySelector('.copy-write-comment');
        var replyUserId = document.querySelector('.reply-user-id');


        reply.forEach(function (element, i) {
            reply[i].addEventListener('click', function (e) {
                e.preventDefault();
                var userName = e.target.dataset.userName;
                var userId = e.target.dataset.userId;


                var userNameHtml = document.createElement('b');
                var descriptionComment = document.createElement('div');

                descriptionComment.style.display = 'inline-block';
                userNameHtml.innerHTML = userName + ',';
                descriptionComment.innerHTML = '&nbsp;';

                formComment.appendChild(userNameHtml);
                formComment.appendChild(descriptionComment);
                formCommentCopy.innerHTML = userNameHtml + ', ';
                replyUserId.value = userId;
            });
        });
        
        if(formComment) {
            formComment.addEventListener('input', function () {
            formCommentCopy.innerHTML = formComment.innerHTML
        });
        }
        
        



    </script>
    
    <script>


    function closeAnswer() {
        var allAnswers = document.querySelectorAll('.answer');

        allAnswers.forEach(function (answer, i) {
            answer.classList.add('answer-index');
        })
    }
    
    
    document.documentElement.addEventListener('click', function (event) {

        var target = event.target;
        
        

        if (target.classList.contains("button-answer")) {
            var question = target.closest('.box-question');
            var answer = question.querySelector('.answer');

            if (answer.classList.contains('answer-index')) {
                closeAnswer();
            }
            answer.classList.toggle('answer-index');

        }
        
    });

</script>


    @endsection
