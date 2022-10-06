
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ПДД в моём городе') }}</title>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    
    <link href="{{asset('/css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body>
    <div id="app">
        
        
        
        <!--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ПДД в моём городе') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav mr-auto">

                    </ul>

                   
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        -->

        <div class="for-ramki hide-for-planshet-and-mobil">
    <form method="POST" class="clearfix forma-for-planshet">
        <div class="clearfix wrapper-for-login">
            <p class="login"><span></span><input type="text" placeholder="Логин"></p>
            <p class="password"><span></span><input type="password" placeholder="Пароль"></p>
        </div>

        <div class="btn-and-zapomnit clearfix">
            <input class="btn-vxod" type="submit" value="войти">

            <label class="zapomnit">
                <input id="my_check2" type="checkbox" />
                <label for="my_check2"><span>Запомнить</span></label>
            </label>
        </div>			
    </form>
    <div class="reg">
        <p>
            В первый раз на сайте?
        </p>
        <a href="#">Регистрация</a>
    </div>		
</div>

<header class="main-header">
    <div class="nav-for-mobil clearfix">

        <div class="xleb-kolbasa-sir">
            <a class="click-na-vkusn9shky" href="#"></a>
        </div>

        <div class="top-menu hide-for-mobil">
            <a href="/">Главная</a>
            <a href="#">Город</a>
            <a href="#">О сайте</a>
            <a href="#">Обратная связь</a>
        </div>

        <div class="logo-for-mobil clearfix">
            <a href="#"><img src="/img/logo.png" width="35px" height="35px" alt="Логотип"></a>

        </div>


        <div class="vxod-for-mobil">
            <p class="title-vxod-for-mobil">Вход на сайт</p>



        </div>




    </div>

    <div class="inner-header">
        <div class="logo clearfix">

            <a href="#"><img src="{{asset('img/logo.png')}}" width="100%" height="100%" alt="Логотип"></a>
        </div>
        <div class="discription">
            <p>ПДД в моём городе</p>
            <p>Научи ездить по правилам</p>
        </div>
        <a href="#" class="btn-chooce">Выбери свой город</a>


    </div>
    <div class="wraper-top-nav">
        <div class="top-menu">
            <a href="#">Главная</a>
            <a href="#">Город</a>
            <a href="#">О сайте</a>
            <a href="#">Обратная связь</a>

            @if (Auth::check())

            <div class="user-profil clearfix">
                <div class="top-menu-user-name-rep">
                    <div class="top-menu-name">{{ Auth::user()->name}}</div>
                    
                </div>

                <div class="top-menu-avatar-menu clearfix">
                    <div class="top-menu-ava">
                        <img src="">
                    </div>

                    <div class="top-menu-menu">
                        <a class="open-submenu-user open-submenu-user" href="#"><img src="img/burger.png"></a>
                    </div>

                </div>				
            </div>

            <div class="submenu-user">
                <ul>
                    <li><a href="?action=edit-user-profil&token=">Профиль</a></li>
                    <li><a href="/add-question">Добавить вопрос</a></li>
                    <li><a href="?my-questions=">Мои вопросы</a></li>
                    <li><a href="?my-bookmark=">Мои закладки</a></li>
                    
                    <!--<li><a class="exit-user" href="?action=exit&token=">Выход</a></li>-->
                    
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                    
                </ul>
            </div>

            @endif
        </div>
    </div>
</header>

<section class="content clearfix">
    <div class="vxod-and-comments clearfix">
        
        @if (!Auth::check())
        <div class="vxod">
            <p class="title-vxod">Вход на сайт</p>

            <div class="for-ramki hide-for-planshet">
                <form method="POST" class="clearfix forma-for-planshet" action="{{ route('login') }}">
                    @csrf
                    <div class="clearfix wrapper-for-login">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                        <p class="login"><span></span><input name="email" type="email" placeholder="Логин"></p>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif

                        <p class="password"><span></span><input name="password" type="password" placeholder="Пароль"></p>

                    </div>
                    <div class="btn-and-zapomnit clearfix">
                        <input class="btn-vxod" type="submit" value="войти">

                        <label class="zapomnit">
                            <input id="my_check" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                   <label for="my_check"><span>Запомнить</span></label>


                        </label>
                    </div>
                </form>

                <div class="reg">
                    <p>
                        В первый раз на сайте?
                    </p>
                    <a href="#">Регистрация</a>
                </div>
            </div>

        </div>
        
        @endif

        <div class="last-comment clearfix">
            <p class="title-vxod">Последние комментарии</p>
            <div class="for-ramki clearfix">

                <div class="com">
                    <div class="ava-and-name-and-data-and-rep clearfix">
                        <div class="ava">
                            <img src="/img/ava.jpg" width="80">
                        </div>
                        <div class="name-and-data-and-rep">
                            <div class="name-and-data">
                                <div class="name-comment"><a href="#">oleg_ra</a></div>
                                <div class="data-comment">22.02.2017</div>
                            </div>
                            <div class="name-rep">Репутация: 10</div>
                        </div>
                    </div>
                    <div class="description-comment clearfix">
                        <p>
                            Тут сложная ситуация, не каждый
                            сотрудник ГАИ даже сразу сможет
                            разобраться
                        </p>
                        <a href="#">перейти к комментарию</a>
                    </div>
                </div>

                <div class="com">
                    <div class="ava-and-name-and-data-and-rep clearfix">
                        <div class="ava">
                            <img src="/img/ava2.jpg" width="80">
                        </div>
                        <div class="name-and-data-and-rep">
                            <div class="name-and-data">
                                <div class="name-comment"><a href="#">oleg_ra</a></div>
                                <div class="data-comment">22.02.2017</div>
                            </div>
                            <div class="name-rep">Репутация: 10</div>
                        </div>
                    </div>
                    <div class="description-comment clearfix">
                        <p>
                            Вообще непонятно кто в такой вот
                            ситуации прав, а кто виноват.
                            Я лично с инструктором, когда ...
                        </p>
                        <a href="#">перейти к комментарию</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
