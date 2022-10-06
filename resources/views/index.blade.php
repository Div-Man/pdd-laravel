@extends('layouts/app')
@section('content')



@php
$peremenayaForRadioName = 1;
@endphp

@foreach($allQuestion as $question)
<div class="box-question">
    <div class="box-title-question">
        <p>Вопрос <strong><span class="question-id">{{$question->id}}</span></strong></p>
        <input type="checkbox" title="" id="check-info-{{$peremenayaForRadioName}}" />
        <label for="check-info-{{$peremenayaForRadioName}}" class="icon-info">
            <img src="img/icons/icon-17.png" alt="icon" title=""/>
        </label>
        <div class="box-info" >
            <span class="address">{{$question->regions->first()->name_region}}, {{$question->raions->first()->raion_name}} @if($question->gorods->first()), {{$question->gorods->first()->gorod_name}}@endif </span>
            <span class="data">{{ Carbon\Carbon::parse($question->created_at)->format('d.m.Y')}}</span>
            <span class="name">{{$question->users->first()->name}}</span>
            <span class="view">{{$question->number_of_views}}</span>
        </div>
    </div>
    <div class="question-img">
        <img src="{{$question->images}}" alt="" title=""/>
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

                
                <a href="/question/{{$question->id}}">{{$question->comments->count()}} комментарий</a>
            </div>
        </div>
    </div>

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
</div>


@php
$peremenayaForRadioName++;
@endphp

@endforeach


<ul class="pagination">
    {{$allQuestion->links()}}
</ul>
</div>

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
