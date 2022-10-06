@extends('layouts.app')

@section('content')


<main class="content-sidebar">
<div class="container">
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-email">
                <div class="card-header">{{ __('Сброс пароля') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            Ссылка на восстановление отправлена на вашу почту.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Вы ввели неправильный адрес.</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                        
                          <div style="text-align: center;">
                              
                                @if ($errors->has('g-recaptcha-response'))
                                           <span style="color: red; font-weight: bold;">{{$errors->first('g-recaptcha-response')}}</span>
                                       @endif


                                   @if(env('GOOGLE_RECAPTCHA_KEY'))
                            <div style="display: inline-block; vertical-align: top;" class="g-recaptcha"
                                 data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                            </div>
                       @endif
                       <br>
                       <br>
                       </div>

                        <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Отправить ссылку для сброса пароля') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>


@endsection
