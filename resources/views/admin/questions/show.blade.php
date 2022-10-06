@extends('admin.layout')

@section('content')





      
        @php
    $peremenayaForRadioName = 1;
    @endphp
    
     
    
    
     



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
            
                
       @isset($message)
    <p style="color: red; font-weight: bold; text-align: center; font-size: 15px; margin-bottom: 20px;">{{$message}}</p>
    @endisset
      <div class="box-title-question">
        <p>Вопрос <strong><span class="question-id">{{$question->id}}</span>/<span>18</span></strong></p>
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
        <div class="answer">
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
 
</script>

<br>

 @if($question->checked == 1)
                      
                          <form action="{{url('/planeta3/question/checked')}}/{{$question->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <button type="submit" class="btn btn-success">
	                Одобрить
	              </button>
                </form>
                      @else
                      
                      <form action="{{url('/planeta3/question/notverified')}}/{{$question->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <button type="submit" class="btn btn-success">
	                Снять с публикации
	              </button>
                </form>
                      @endif
                
    
    <script>
        var ans = document.querySelectorAll('.options');
    
    var otvet = document.querySelectorAll(".otvet");

    ans.forEach(function (element, i) {

        ans[i].addEventListener('click', function (e) {

            var inputs = e.target.closest('.options');
            var idQuestion = inputs.getElementsByClassName("questionId")[0].value;
            var answer = '';
           
           if(e.target.hasAttribute('value')) {
             answer = e.target.value;
           }

            else {
                return; // что бы не попадало пустое значение
            }
           
           //console.log(answer);
           
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'get',
                url: '/check-answer/' + idQuestion,
                dataType: 'json',
                data: {answer: answer},
                success: function (result) {

                    if (result == 1) {
                        if(otvet[i].classList.contains('false')) {
                            otvet[i].classList.remove('false');
                        }
                        otvet[i].classList.add('true');
                        
                    } else if (result == 2) {
                        if(otvet[i].classList.contains('true')) {
                            otvet[i].classList.remove('true');
                            }
                             otvet[i].classList.add('false');
                    }
                    console.log(result);

                },

                error: function () {
                    otvet[i].innerHTML = 'Ошибка сайта';

                }

            });
            

        })

    })
    
     
</script>
                
                
                
                
                
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection