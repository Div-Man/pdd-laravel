@extends('layouts/app')
@section('content')


<main class="content-sidebar">
    @if(session()->has('addFeedback'))
    <div style="  height: 10em;
         display: flex;
         align-items: center;
         justify-content: center;">
        <span style="
              color:#155724;
              background-color:#d4edda;
              border-color:#c3e6cb;
              padding: 10px;
              border-radius: 5px;
              ">{{ session()->get('addFeedback')}}<span>
                </div>

</div>
@else
<button type="button" id="button-menu" onclick="openMenu()">&equiv;</button>
<div class="container"> 



    <form action="/store-feedback" method="post" class="form-feedback">
        {{csrf_field()}}
        <h2>Форма обратной связи</h2>
        <p>Ваш вопрос</p>
        @if ($errors->has('text'))
        <p style=" display: flex;
           justify-content: flex-start; font-weight: bold; color: #dc3545; font-size: 90%;">{{$errors->first('text')}}</p>

        @endif

        <textarea name="text" title="Введите текст вопроса">{{old('text')}}</textarea>

        @if ($errors->has('email'))
        <p style="display: flex;
           justify-content: flex-start; font-weight: bold; color: #dc3545; font-size: 90%;">{{$errors->first('email')}}</p>

        @endif

        <p>E-mail:</p>
        <input type="text" name="email" value="{{old('email')}}" title="Введите Ваш mail"/>

        @if ($errors->has('g-recaptcha-response'))
        <p style="display: flex;
           justify-content: flex-start; font-weight: bold; color: #dc3545; font-size: 90%;">{{$errors->first('g-recaptcha-response')}}</p>

        @endif
        <br>

        @if(env('GOOGLE_RECAPTCHA_KEY'))   
        <p style="display: flex;
           justify-content: flex-start;" class="g-recaptcha"
           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
        </p>
       @endif
        <input type="submit" value="Отправить">
    </form>
    </div>

@endif
</main>



@endsection

