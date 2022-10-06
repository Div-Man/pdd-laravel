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
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- https://fontawesome.ru/get-started/-->
        
        <style>
            
             body{
                background: #f6f8f9;
            }
            
            a.knopka {
            color: #fff; /* цвет текста */
            text-decoration: none; /* убирать подчёркивание у ссылок */
            user-select: none; /* убирать выделение текста */
            background: rgb(212,75,56); /* фон кнопки */
            padding: .5em 1.5em; /* отступ от текста */
            outline: none; /* убирать контур в Mozilla */
            border-radius: 10px;
          } 
          a.knopka:hover { background: rgb(232,95,76); } /* при наведении курсора мышки */
          a.knopka:active { background: rgb(152,15,0); } /* при нажатии */
          
          
          .blink_me {
                animation: blinker 1s linear infinite;

            }

            @keyframes blinker {
                50% {
                    opacity: 0;
        </style>
        
    </head>
    <body>


       <div class="for-ramki hide-for-planshet-and-mobil">
                    <script src="//ulogin.ru/js/ulogin.js"></script>
                    <div style="margin: 0 auto; text-align: center;" id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name,email;providers=vkontakte,mailru,facebook,google,yandex;redirect_uri={{ urlencode('http://' . $_SERVER['HTTP_HOST']) }}/ulogin;mobilebuttons=0;"></div>


                    <form method="POST" class="clearfix forma-for-planshet" action="{{ route('login') }}">
                        @csrf

                        <div class="clearfix wrapper-for-login">
                            <p class="login"><span></span><input type="text" name="email" placeholder="Логин"></p>
                            <p class="password"><span></span><input type="password" name="password" placeholder="Пароль"></p>
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
                        <a href="/register">Регистрация</a>
                    </div>		
                </div>

        <header class="main-header header2">
            <div class="nav-for-mobil clearfix">

                <div class="xleb-kolbasa-sir">
                    <a class="click-na-vkusn9shky" href="#"></a>
                </div>

                <div class="top-menu hide-for-mobil">
                            <a href="/choose-city">Город</a>
                            @if (Auth::check())
                            <a href="/my-profile">Профиль</a>
                            <a href="/add-question">Добавить вопрос</a>
                            <a href="/my-questions">Мои вопросы</a>
                            <a href="/my-bookmark">Мои закладки</a>
                            @endif
                        </div>
                
                
                @if (Auth::check())
                 <a style="position: absolute; top: 5px; left: 70px; color: white;"




                           href="/my-notifications">
                            @if($notificationsCount != 0)
                            <i style="color: red; font-size: 18px;" class="blink_me fa fa-bell" aria-hidden="true"></i> 
                            @else 
                            <i style="font-size: 18px;" class="fa fa-bell" aria-hidden="true"></i>
                            @endif


                            (<span class="count-notif">{{$notificationsCount}}</span>)</a>
                            @endif

                <div class="logo-for-mobil clearfix">
                    <a href="/"><img src="/img/logo.png" width="35px" height="35px" alt="Логотип"></a>

                </div>


                 @if (!Auth::check())

                        <div class="vxod-for-mobil">
                            <p class="title-vxod-for-mobil">Вход на сайт</p>

                        </div>

                        @else

                        <div style="position: absolute; top: 0px; right: 70px; color: white;" class="top-menu-ava">
                            <img src="{{$avatar->avatar_700}}">
                            
                            
                            
                        </div>
                        
                        <a  style="position: absolute; top: 5px; right: 10px; color: white;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>


                        @endif




            </div>

            <div class="inner-header inner-header2">
                <div class="logo clearfix">


                </div>
                <div class="discription discription2">
                    <p>ПДД в моём городе</p>
                    <p>Научи ездить по правилам</p>
                </div>



            </div>
            <div class="wraper-top-nav">
                <div class="top-menu">
                    <a href="/">Главная</a>
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


                <div class="last-comment clearfix">
                    <p class="title-vxod">Последние комментарии</p>
                    <div class="for-ramki clearfix">

                        <div class="com">
                            <div class="ava-and-name-and-data-and-rep clearfix">
                                <div class="ava">
                                    <img src="img/ava.jpg" width="80">
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
                                    <img src="img/ava2.jpg" width="80">
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

            <script>
                
                
                var btn = document.querySelector(".addImg");
                var photoFile = document.getElementById("photoInput");
                

                if(btn != null && photoFile != null) {
                    btn.addEventListener('click', function (e) {
                        e.preventDefault();
                            photoFile.click();
                        })

                        var fileReader = new FileReader();

                        fileReader.addEventListener('load', function () {
                            theImage.src = this.result;
                        });

                        photoInput.addEventListener('change', function (e) {
                            var file = e.target.files[0];

                            fileReader.readAsDataURL(file);
                    });
                }
                
                




                var listCity = document.querySelector(".styled-select");
                var showListCity = document.querySelector(".chooce-option");
                var cityValue = document.querySelector(".chooce-value");


                /*
                 var select = document.querySelector(".list-city");
                 var options = select.querySelectorAll("li");
                 
                 
                 showListCity.addEventListener("click", function (e) {
                 if (listCity.style.display != 'block') {
                 listCity.style.display = 'block';
                 } else {
                 listCity.style.display = 'none';
                 }
                 
                 
                 })
                 */


                /*
                 
                 options.forEach(function (item, i, arr) {
                 options[i].addEventListener('click', function (t) {
                 
                 console.log(t.target.getAttribute("data-value"))
                 showListCity.value = t.target.innerHTML;
                 cityValue.value = t.target.getAttribute("data-value");
                 console.log(cityValue.value)
                 listCity.style.display = 'none';
                 
                 
                 })
                 });
                 */

/////////////////////////////////////

                


//////////////////////////////////
//новые////////////////////////
//////////////////////////////


                $(document).ready(function () {
                    $('#get_raion').on('change', function () {

                        //удалит предыдущие выбранные районы
                        $('#get_goroda').children().remove();
                        $('#get_mesto').children().remove();

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-raion/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                //console.log(result);

                            $('#get_goroda').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#get_goroda')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.raion_name));

                                    //console.log(value.raion_name);
                                });

                            },
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#get_goroda')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                        });

                    });
                });
                
                /////////////////////////////
                
                
                 $(document).ready(function () {
                    $('#get_goroda').on('change', function () {
                        
                        console.log($(this).val());

                        //удалит предыдущие выбранные районы
                        
                        
                        $('#get_mesto').children().remove();

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-goroda/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                //console.log(result);

                            $('#get_mesto').append('<option disabled selected value>Не выбрано</option>');
                            
                                $.each(result, function (key, value) {
                                    $('#get_mesto')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.gorod_name));

                                    //console.log(value.raion_name);
                                });

                            },
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#get_mesto')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                        });
                        

                    });
                });
                
                
                /////////////////////////////////////////////////
                
                     $(document).ready(function () {
                    $('#get_item_pdd').on('change', function () {
                        
                        //удалит предыдущие 
                        $('#get_sub_item_pdd').children().remove();
                       

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-item-pdd/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                console.log(result);
                             
                            $('#get_sub_item_pdd').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#get_sub_item_pdd')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.title));

                                    //console.log(value.raion_name);
                                });
                                

                            },
                            
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#get_sub_item_pdd')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                            
                        });

                    });
                });
                
                
                
                
                    $(document).ready(function () {
                    $('#get_sing_pdd').on('change', function () {
                        
                        //удалит предыдущие 
                        $('#sing_pdd').children().remove();
                       

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-sing-pdd/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                console.log(result);
                             
                            $('#sing_pdd').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#sing_pdd')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.numeral));

                                    //console.log(value.raion_name);
                                });
                                

                            },
                            
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#sing_pdd')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                            
                        });

                    });
                });
                
                
                
                
                
                     $(document).ready(function () {
                    $('#get_marking_pdd').on('change', function () {
                        
                        //удалит предыдущие 
                        $('#marking_pdd').children().remove();
                       

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-marking-pdd/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                console.log(result);
                             
                            $('#marking_pdd').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#marking_pdd')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.numeral));

                                    //console.log(value.raion_name);
                                });
                                

                            },
                            
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#marking_pdd')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                            
                        });

                    });
                });
                
                
                
                
                
                
                    $(document).ready(function () {
                    $('#get_permission_pdd').on('change', function () {
                        
                        //удалит предыдущие 
                        $('#permission_pdd').children().remove();
                       

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-permission-pdd/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                console.log(result);
                             
                            $('#permission_pdd').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#permission_pdd')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.numeral));

                                    //console.log(value.raion_name);
                                });
                                

                            },
                            
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#permission_pdd')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                            
                        });

                    });
                });
                





            </script>
    </body>
</html>