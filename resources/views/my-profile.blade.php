@extends('layouts/app')
@section('content')




<br>
    <h2>Профиль</h2>
    <div class="block-profile">
        
        <form action="/update-profile" method="POST" enctype="multipart/form-data" class="clearfix">
            {{csrf_field()}}
            <p style="text-align: center; margin-bottom: 20px;"> {{ Carbon\Carbon::parse($user->created_at)->format('d.m.Y H:i:s')}}</p>
            
            
      <div class="profile-setting"> 
        <div class="box-avatar">
          <img src="{{$user->avatar_700}}" alt="ava" title="" class="img-circle2" id="theImage2"/>
          <label>
            <input type="file" title="" id="photoInput2" class="addImg2" name="image"/>
            <img src="img/icons/icon-13.png" alt="icon" title=""/>
            <p>Изменить фото</p>
          </label>
        </div>
          <br>
         @if($user->network != null && $user->edit_name == null)
                    Так как вы зарегистрировалиь, с помощью социальной сети,
                    вы можете изменить имя только 1 раз. 
        <div class="name-profile">
            
           
          <input type="text" name="name" value="{{$user->name}}" title="" />
          <button type="button"></button>
          @else 
          <div class="name-profile">
          <input type="text" value="{{$user->name}}" title="" readonly="readonly"/>
          
          @endif
        </div>
                    @if(session()->has('dublicat'))
                            <div style="color: #721c24; 
                                 background: #f8d7da; 
                                 border: 1px solid #f5c6cb; 
                                 padding: .75rem 1.25rem; 
                                 border-radius: .25rem;">
                                {{ session()->get('dublicat')}}
                                
                            </div>
                    <br>
                        @endif
       
        <input style="
                font-family: 'SF Pro Display Bold', sans-serif;
  font-size: 16px;
  color: #fff;
  width: 100%;
  height: 45px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  background-color: #3734b6;
  border-radius: 5px;
               " type="submit" value="Сохранить">
        <br>
      </div>
            </form>
        
        <script>
    var btn = document.querySelector(".addImg2");
    var photoFile = document.getElementById("photoInput2");

    btn.addEventListener('click', function (e) {
        photoFile.click();
        
    })

    var fileReader = new FileReader();

    fileReader.addEventListener('load', function () {
        theImage2.src = this.result;
    });

    photoInput2.addEventListener('change', function (e) {
        var file = e.target.files[0];

        fileReader.readAsDataURL(file);
    });

</script>
       

      <div class="box-info-panel"> 
        <div class="button-info-panel">
          <input type="radio" name="r-info" 
                 @if(Route::current()->uri == 'my-profile')
                 checked="checked" 
                 @endif 
                 
                 id="r-questions">
          <label class="my-profile" for="r-questions">Мои вопросы</label>
          
          <input type="radio" name="r-info" 
                 @if(Route::current()->uri == 'my-bookmark') 
                 checked="checked" 
                 @endif 
                 
                 id="r-marks">
          <label class="my-bookmark" for="r-marks">Мои закладки</label>
          
        </div>
          
        <div class="content-info-panel">
            
            
            
        
           
          <div class="panel-marks active">
              
              
               @if(Route::current()->uri == 'my-profile')
                    @foreach($myQuestions as $question)
                    <div>
                   <span>{{ Carbon\Carbon::parse($question->created_at)->format('d.m.Y H:i:s')}}</span>
                   <div>
                     <p><a style="color: #1f1e2c;" href="/question/{{$question->id}}">{{$question->description}}</a></p>
                     <a href="/question/edit/{{$question->id}}">
                       <img src="img/icons/icon-14.png" alt="icon" title="Изменить">
                     </a>
                   </div>
                   
                               
                 </div>
 
                @endforeach
                
                <ul class="pagination">
                   {{$myQuestions->links()}}
                 </ul>
                
                @elseif(Route::current()->uri == 'my-bookmark')
                @foreach($myBookmark as $question)
                    <div>
                   <span>{{ Carbon\Carbon::parse($question->created_at)->format('d.m.Y H:i:s')}}</span>
                   <div>
                     <p><a style="color: #1f1e2c;" href="/question/{{$question->id}}">{{$question->description}}</a></p>
                     <a href="#">
                       <img src="img/icons/icon-14.png" alt="icon" title="Изменить">
                     </a>
                   </div>
                 </div>

                @endforeach
                 <ul class="pagination">
                   {{$myBookmark->links()}}
                 </ul>
               @endif
              
            
          </div>
        </div>
      </div>
    </div>

            <script>
                
                
              
            var myBookmark = document.querySelector('.my-bookmark');
    myBookmark.addEventListener('click', function(e) {
        document.location.replace('/my-bookmark');
    });
    
    var myQuestion = document.querySelector('.my-profile');
    myQuestion.addEventListener('click', function(e) {
        document.location.replace('/my-profile');
    });
            </script>




@endsection

