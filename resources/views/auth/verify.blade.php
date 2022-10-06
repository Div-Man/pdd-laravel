@extends('layouts.app')

@section('content')
<main class="content-sidebar">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Проверьте свой адрес электронной почты') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш адрес электронной почты отправлена ссылка для подтверждения.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить, проверьте свою электронную почту на наличие ссылки для подтверждения.') }}
                    {{ __('Если вы не получили письмо') }}, <a href="{{ route('verification.resend') }}">{{ __('нажмите здесь, чтобы заного его отправть.') }}</a>.
                </div>
                
               <p style="display: flex;
           justify-content: flex-start; font-weight: bold; color: #dc3545; font-size: 90%;" class="card-body">Если вы не подтвердите свой адрес в течение трёх дней, то ваш аккаунт будет удалён!</p>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
