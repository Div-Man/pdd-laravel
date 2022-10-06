<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <link href="/css/fonts.css" rel="stylesheet" type="text/css"/>
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="UTF-8"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        @if(@isset($question) && Route::currentRouteName() != 'main')
         <title>ПДД в моём городе | {{$question->description}}</title>
        @elseif(Route::currentRouteName() == 'pdd')
            <title>Правила дорожного движения {{ date('Y') }}</title>
        @else
         <title>ПДД в моём городе | Площадка вопросов для автошкол России</title>
        @endif
       
        <meta name="yandex-verification" content="9fdc71365211bfcf" />

        
        <script src="{{ asset('js/script.js') }}" defer></script>

     <link href="{{asset('/css/style.css')}}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    
        <!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>-->
        
 
        
        
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
        
        
        <style>
            
            
        

            .blink_me {
                animation: blinker 1s linear infinite;

            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
               
            }  
                


#map {width: 100%; height: 400px; }

#mapSearchContainer{
  position:fixed;
  top:20px;
  right: 40px;
  height:30px;
  width:180px;
  z-index:110;
  font-size:10pt;
  color:#5d5d5d;
  border:solid 1px #bbb;
  background-color:#f8f8f8;
}
.pointer{
  position:absolute;
  top:86px;
  left:60px;
  z-index:99999;
}


            </style>


        </head>

	


    <body id="document-body">
        <header class="header" id="header">
            <div class="container">
                <nav class="header-menu">
                    <button type="button" id="close-menu" onclick="openMenu()">&times;</button>
                    <ul>
                        <li class="current">
                            <a href="/">Главная</a>
                        </li>
                        <li>
                            <a href="/about">О сайте</a>
                        </li>
                        <li>
                            <a href="/pdd">ПДД</a>
                        </li>
                        <li>
                            <a href="/feedback">Обратная связь</a>
                        </li>
                        <li>
                            <a href="/tips">Ваши советы</a>
                        </li>
                    </ul>
                </nav>
                <div class="header-right-panel">

                    @if (Auth::check()) 
                    <button type="button" class="button-inform">
                        <img src="/img/icons/icon-1.png" alt="icon" title="" id="image-1"/>
                        @if($notificationsCount != 0)


                        <span class="count-notif blink_me">{{$notificationsCount}}</span>

                        @endif
                        <p>Уведомления</p>
                    </button>
                    @endif 

                    @if (Auth::check()) 

                    <button type="button" class="log-in" onclick="">
                        <img src="/img/icons/icon-2.png" alt="icon" title="" id="image-2"/>
                        <p><a href="/my-profile">{{ Auth::user()->name}}</a></p>
                    </button>

 <button  style="
               width: auto;
  height: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
   margin-right: 20px;
  background-color: transparent;
  font-size: 20px;
  cursor: pointer;" type="button" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="fa fa-sign-out"></i>
              
                                       
                                    </button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    
                    <script>
                      


function openMenu() {
    if (neutral == false) {
        document.getElementById("header").classList.add('open');
        document.getElementById("image-1").setAttribute('src','img/icons/icon-18.png');
        document.getElementById("image-2").setAttribute('src','img/icons/icon-19.png');

        neutral = true;
    } else {
        document.getElementById("header").classList.remove('open');
        document.getElementById("image-1").setAttribute('src','img/icons/icon-1.png');
        document.getElementById("image-2").setAttribute('src','img/icons/icon-3.png');
        neutral = false;
    }
}
                    </script>


         
         
         @else
      <button type="button" class="log-in" onclick="showModal()">
        <img src="/img/icons/icon-2.png" alt="icon" title="" id="image-2"/>
        <p>Войти</p>
      </button>
        @endif 
        
      <a href="/add-question" class="button-add-question">Добавить свой вопрос</a>
    </div>
  </div>
</header>
       
<main class="content-sidebar">
  <button type="button" id="button-menu" onclick="openMenu()">&equiv;</button>
  <div class="container">
      
    
      

      
     @if(Route::currentRouteName() != 'edit-question' && Route::currentRouteName() != 'add-question')
     
      
    <form class="block-filter" action="/save-city" method="get">
        {{csrf_field()}}
      <span onclick="openFilter()">Фильтры</span>
      <div class="filter" id="filter">
          
        <button type="button" id="close-filter" onclick="openFilter()">&times;</button>
        <select title="Выберите регион" id="get_raion" name="get_raion">
          <option value="" selected="selected">Регион</option>
          @foreach ($regions as $region)
             @if(Cookie::get('region_id') == $region->id)
                <option selected value="{{$region->id }}">{{$region->name_region}}</option>
                @else
                 <option value="{{$region->id }}">{{$region->name_region}}</option>
                @endif
            

            @endforeach
          
          
        </select>
        <select title="Выберите город" id="get_goroda" name="get_goroda">
            @if(Cookie::get('raion_id'))
             <option value="" selected="selected">{{$raion->first()->raion_name}}</option>
             @else
             <option value="" selected="selected">Город</option>
             @endif
          
        </select>
        <select title="Выберите адрес" id="get_mesto" name="get_mesto">
             @if(Cookie::get('gorod_id'))
             <option value="" selected="selected">{{$gorod->first()->gorod_name}}</option>
             @else
             <option value="" selected="selected">Адрес</option>
             @endif
             
        </select>
        <select title="Выберите категорию ПДД" name="category_pdd">
          <option value="" selected="selected">Категория ПДД</option>
          <optgroup label="Пункты ПДД">
            @foreach ($pdd as $item)
                @if(Cookie::get('pdd_item') == $item->id)
                <option selected value="pdd|{{$item->id }}">{{$item->id}}. {{$item->text}}</option>
                @else
                  <option value="pdd|{{$item->id }}">{{$item->id}}. {{$item->text}}</option>
                @endif
                
           
            @endforeach
          </optgroup> 
          <optgroup label="Знаки дорожного движения">
           @foreach ($sings as $sing)
           
           @if(Cookie::get('sing_item') == $sing->id)
                <option selected value="sing|{{$sing->id }}">{{$sing->id}}. {{$sing->title}}</option>
                @else
                 <option value="sing|{{$sing->id }}">{{$sing->id}}. {{$sing->title}}</option>
                @endif
           
            
            @endforeach
          </optgroup>
        </select>
       
       
        <label id="reset-filters2">Нарушители <input type="checkbox" name="violator"></label>
        <a class="knopka" id="reset-filters" href="/reset-gorod">Сбросить фильтры</a>
       
        
        <input type="submit" value="Поиск" class="header-search"/>
      </div>
      
    </form>
      
      @endif
      
      
  
    @yield('content')
 
  </div>
</main>
        
<footer class="footer" id="footer">



  <div class="container">
    <p class="text-footer">&copy; Все права защищены | <?php echo date("Y");?><br/>pdd-vmg.ru</p>
    <ul class="social">
      <li>
        <a href="#">
          <img src="/img/icons/icon-11.png" alt="icon" title="vk"/>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/img/icons/icon-12.png" alt="icon" title="youtube"/>
        </a>
      </li>
<li>
 <!--LiveInternet counter--><script type="text/javascript">
document.write('<a href="//www.liveinternet.ru/click" '+
'target="_blank"><img src="//counter.yadro.ru/hit?t11.6;r'+
escape(document.referrer)+((typeof(screen)=='undefined')?'':
';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
';h'+escape(document.title.substring(0,150))+';'+Math.random()+
'" alt="" title="LiveInternet: number of pageviews for 24 hours,'+
' of visitors for 24 hours and for today is shown" '+
'border="0" width="88" height="31"><\/a>')
</script><!--/LiveInternet-->
</li>
    </ul>

</footer>


  </div>


    
 
@if (!Auth::check())   
<div class="modal" id="modal-login">
  <div class="modal-login" id="login">
    <span class="close" onclick="closeModal()">&#10006;</span>
    <h5>Вход</h5>
    <ul class="login-socicons">
      <script src="//ulogin.ru/js/ulogin.js"></script>
                    <div style="margin: 0 auto; text-align: center;" id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name,email;providers=vkontakte,mailru,facebook,google,yandex;redirect_uri={{ urlencode('http://' . $_SERVER['HTTP_HOST']) }}/ulogin;mobilebuttons=0;"></div>
    </ul>
    <div class="line">
      <hr/>
      <p>или</p>
      <hr/>
    </div>
    <form method="POST" action="{{ route('my-login') }}" id="mainLoginBlock" class="form-registration">
    
                                    <span style="
    font-size: 90%;
    color: #dc3545;">
                                        <strong id="errorEmail"></strong>
                                    </span>
        @csrf
      <span>E-mail:</span>
      <input type="text" title="" name="email" />
      
     
                                    <span style="
    font-size: 90%;
    color: #dc3545;">
                                        <strong id="errorPasswrd"></strong>
                                    </span>
                                
        @csrf
      <span>Пароль:</span>
      <input type="text" title="" name="password"/>
      
      <br>
      <a href="/password/reset">Забыли пароль?</a>
      <input type="submit" class="my-login" value="Войти"/>
    </form>
    <button type="button" onclick="showModalReg()">Регистрация</button>
  </div>
  <div class="modal-registration" id="registration">
    <span class="close" onclick="closeModal()">&#10006;</span>
    <h5>Регистрация</h5>
    <ul class="login-socicons">
      <script src="//ulogin.ru/js/ulogin.js"></script>
                    <div style="margin: 0 auto; text-align: center;" id="uLogin2" data-ulogin="display=panel;theme=classic;fields=first_name,last_name,email;providers=vkontakte,mailru,facebook,google,yandex;redirect_uri={{ urlencode('http://' . $_SERVER['HTTP_HOST']) }}/ulogin;mobilebuttons=0;"></div>
    </ul>
    <div class="line">
      <hr/>
      <p>или</p>
      <hr/>
    </div>
    <form method="POST" action="{{ route('my-register') }}" id="mainRegisterBlock" class="form-registration">
        @csrf
        <span style="
    font-size: 90%;
    color: #dc3545;">
                                        <strong id="errorRegisterLogin"></strong>
                                    </span>
        <span>Логин</span>
      <input name="login" type="text" title=""/>
      
         <span style="
    font-size: 90%;
    color: #dc3545;">
                                        <strong id="errorRegisterEmail"></strong>
                                    </span>
        <span>E-mail:</span>
      <input name="email" type="text" title=""/>
       <span style="
    font-size: 90%;
    color: #dc3545;">
                                        <strong id="errorRegisterPassword"></strong>
                                    </span>
      <span>Пароль:</span>                              
      <input name="password" type="text" title=""/>
      <input type="submit" class="my-register" value="Зарегистрироваться"/>
    </form>
    <button type="button" onclick="showModal()">Вход</button>
  </div>
</div>


<script>
    
    var loginButton = document.querySelector('.my-login');
    var form = document.forms.mainLoginBlock;
  
    loginButton.addEventListener('click', function(e){
        e.preventDefault();
          var email = form.elements.email.value;
          var password = form.elements.password.value;

      

                $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'post',
                url: '/my-login',
                dataType: 'json',
                data: {email: email, password: password},
                success: function (result) {
                        console.log(result);
                    
                   
                    if(result['error']) {
                        errorEmail.innerHTML = result['error'];
                    }  
                    
                    if(result['ok']) {
                       document.location.replace('/');
                    }  

                },

                error: function () {
                  console.log('Ошибка сайта');

                }

            });
            
           
        
    });
    
    
    /////////////////////////////////////////////////////////
    
    
     var registernButton = document.querySelector('.my-register');
    
    function registerForm(e) {
        
    var form = document.forms.mainRegisterBlock;
  
    
        e.preventDefault();
          var email = form.elements.email.value;
          var password = form.elements.password.value;
          var login = form.elements.login.value;

                $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'post',
                url: '/my-register',
                dataType: 'json',
                data: {email: email, password: password, login: login},
                success: function (result) {
                        console.log(result);
                        
                       errorRegisterLogin.innerHTML = '';
                       errorRegisterEmail.innerHTML = '';
                       errorRegisterPassword.innerHTML = '';
                       
                      
                    if(result['error']) {
                            errorRegisterEmail.innerHTML = result['error'];
                    }
                    else if(result['errorLogin']) {
                         errorRegisterLogin.innerHTML = result['errorLogin'];
                    }
                    else {
                            errorRegisterLogin.innerHTML = result['login']||'';
                            errorRegisterEmail.innerHTML = result['email']||'';
                            errorRegisterPassword.innerHTML = result['password']||'';
                    };
                    
                     if(result['ok']) {
                       document.location.replace('/email/verify');
                    }  

                       
                        /*
                        
                    
                    if(result['errorLogin']) {
                       errorRegisterEmail.innerHTML = '';
                       errorRegisterLogin.innerHTML = result['errorLogin'];
                       errorRegisterPassword.innerHTML = '';
                    }  
                    
                    else if(result['error']) {
                       errorRegisterEmail.innerHTML = result['error'];
                       errorRegisterLogin.innerHTML = '';
                       errorRegisterPassword.innerHTML = '';
                    }  
                    
                    else if(result['login'] && result['email'] && result['password']) {
                        errorRegisterLogin.innerHTML = result['login'];
                        errorRegisterEmail.innerHTML = result['email'];
                        errorRegisterPassword.innerHTML = result['password'];
                    }
                    
                    else if(result['login'] && typeof(result['email']) == "undefined" && typeof(result['password']) == "undefined") {
                        errorRegisterLogin.innerHTML = result['login'];
                        errorRegisterEmail.innerHTML = '';
                        errorRegisterPassword.innerHTML = '';
                    }
                   
                    else if(typeof(result['login']) == "undefined" && result['email'] && result['password']) {
                        errorRegisterLogin.innerHTML = '';
                        errorRegisterEmail.innerHTML = result['email'];
                        errorRegisterPassword.innerHTML = result['password'];
                    }
                    
                     else if(typeof(result['login']) == "undefined" && typeof(result['email'])  == "undefined" && result['password']) {
                        errorRegisterLogin.innerHTML = '';
                        errorRegisterEmail.innerHTML = '';
                        errorRegisterPassword.innerHTML = result['password'];
                    }
                    
                    else if(typeof(result['login']) == "undefined" && typeof(result['email'])  == "undefined" && typeof(result['password'])  == "undefined") {
                        errorRegisterLogin.innerHTML = '';
                        errorRegisterEmail.innerHTML = '';
                        errorRegisterPassword.innerHTML = '';
                    }
                    
                     else if(typeof(result['login']) == "undefined" && result['email']  && typeof(result['password']) == "undefined") {
                        errorRegisterLogin.innerHTML = '';
                        errorRegisterEmail.innerHTML = result['email'];
                        errorRegisterPassword.innerHTML = '';
                    }
                    
                    
                    if(result['ok']) {
                       document.location.replace('/email/verify');
                    }  
                    */

                },

                error: function () {
                  console.log('Ошибка сайта');

                }

            });
               
   
    }
    
   registernButton.addEventListener('click', registerForm)
    
    
    
    
    
</script>


@endif    
    
    

<script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>



</body>
</html>






 





                




