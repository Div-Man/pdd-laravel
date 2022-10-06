@extends('layouts/app')
@section('content')


<div class="red-profil">
    <p class="new-questions">Редактирование профиля</p>

    <div class="info-user">
       
            <div class="add-ava">
                <div class="info-user-img">
                    <img src="{{$user->avatar_700}}" class="img-circle2" id="theImage2" alt="">
                </div>
            </div>

            <div class="data-link-vk-right">
                 <div class="data-link-vk">
                    <div class="ico-chooce">
                        <span class="ico-city ico-data"></span>
                        <span class="title-choce">Имя</span>
                    </div>
                    <p class="data-reg">{{$user->name}}</p>
                </div>
                <div class="data-link-vk">
                    <div class="ico-chooce">
                        <span class="ico-city ico-data"></span>
                        <span class="title-choce">Дата регистрации</span>
                    </div>
                    <p class="data-reg">{{$user->created_at}}</p>
                </div>
               
                  <div class="data-link-vk">
                      <a href="/user-question/{{$user->id}}">Вопросы пользователя ({{$userQuestionCount}})</a>
                </div>
               
            </div>
        
    </div>

</div>			


@endsection

