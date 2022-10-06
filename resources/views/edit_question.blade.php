
@extends('layouts/app')
@section('content')

<h2>Редактирование вопроса</h2>
        
    <form action="/update-question" method="post" enctype="multipart/form-data" class="add-question">
         <input type="hidden" name="question_id" value="{{$question->id}}">
         {{csrf_field()}}
      <div class="form-add-address">
         
            @if ($errors->has('get_raion'))
                            <span style="color: red; font-weight: bold;">{{$errors->first('get_raion')}}</span>
                        @endif
          
        <select title="Выберите регион" size="1" id="get_raion" name="get_raion">
             
          <option disabled selected="selected">Регион</option>
          @foreach ($regions as $region)
          
            @if($region->id == $question->region_id)
            <option selected value="{{$question->region_id }}">{{$question->regions->first()->name_region}}</option>
            @else

               <option value="{{$region->id }}">{{$region->name_region}}</option>
            @endif
           @endforeach
        </select>
          
          

         
          
                        @if ($errors->has('get_goroda'))
                            <span style="color: red; font-weight: bold;">{{$errors->first('get_goroda')}}</span>
                        @endif
         
        <select size="1" id="get_goroda" name="get_goroda" title="Выберите город">
          <option disabled selected="selected">Город</option>
           @if($question->raion_id)
            <option selected value="{{$question->raion_id}}">{{$question->raions->first()->raion_name}}</option>
           @endif
        </select>
          
         
        <select title="Выберите адрес" size="1" id="get_mesto" name="get_mesto">
          <option disabled selected="selected">Адрес</option>
           @if($question->gorod_id)
            <option selected value="{{$question->gorod_id}}">{{$question->gorods->first()->gorod_name}}</option>
           @endif
        </select>
      </div>
        
    @if ($errors->has('image'))
               <div style="color: red; font-weight: bold; width: 100%; margin-bottom: 5px;">{{$errors->first('image')}}</div>
        @endif
        
      <div class="form-add-photo">
         
          
        <label>
          <input type="file" title="" name="image" id="photoInput"/>
          <img src="/{{$question->images}}" alt="icon" title="" id="theImage" style="
               width: 100%;
               height: 100%;
               objectFit: cover;
               "/>
          <p class="addImg" style="display: none;">Добавить фото</p>
        </label>
                    
                    
      </div>
        
         
        

        
      <div class="form-add-question">
           @if ($errors->has('question_description'))
                        <span style="color: red; font-weight: bold;">{{$errors->first('question_description')}}</span>
                    @endif
        <p>Ваш вопрос</p>
        <textarea name="question_description">{{$question->description}}</textarea>
      </div>
      <div class="add-answers">
        <p>Варианты ответов (минимум 2):</p>
        <div id="box-answers">
          <div>
            <div class="box-answers-option">
                @if ($errors->has('var1'))
                        <span style="color: red; font-weight: bold; font-size: 14px;">{{$errors->first('var1')}}</span>
                    @endif
              <span>Вариант 1</span>
              <input type="text" value="{{$question->variant1}}" name="var1"/>
            </div>
            <div class="box-answers">
                @if($question->answer == '1')
                 <input type="radio" name="answer" value="1" checked="checked" id="r-answers-1"/>
                 @else
                 <input type="radio" name="answer" value="1" id="r-answers-1"/>
                @endif
                
             
              <label for="r-answers-1">
                <span></span>
              </label>
              <span>Правильный</span>
            </div>
          </div>
          <div>
            <div class="box-answers-option">
                @if ($errors->has('var2'))
                        <span style="color: red; font-weight: bold; font-size: 14px;">{{$errors->first('var2')}}</span>
                    @endif
              <span>Вариант 2</span>
              <input type="text" value="{{$question->variant2}}" name="var2"/>
            </div>
            <div class="box-answers">
                
                @if($question->answer == '2')
                 <input type="radio" name="answer" value="2" checked="checked" id="r-answers-2"/>
                 @else
                  <input type="radio" name="answer" value="2" id="r-answers-2"/>
                @endif
                
            
              <label for="r-answers-2">
                <span></span>
              </label>
              <span>Правильный</span>
            </div>
          </div>
            
            <div>
            <div class="box-answers-option">
                @if ($errors->has('var3'))
                        <span style="color: red; font-weight: bold; font-size: 14px;">{{$errors->first('var3')}}</span>
                    @endif
              <span>Вариант 3</span>
              <input type="text" value="{{$question->variant3}}" name="var3"/>
            </div>
            <div class="box-answers">
                
                
                  
                @if($question->answer == '3')
                 <input type="radio" name="answer" value="3" checked="checked" id="r-answers-3"/>
                 @else
                  <input type="radio" name="answer" value="3" id="r-answers-3"/>
                @endif
                
             
              <label for="r-answers-3">
                <span></span>
              </label>
              <span>Правильный</span>
            </div>
          </div>
            <div>
            <div class="box-answers-option">
                @if ($errors->has('var4'))
                        <span style="color: red; font-weight: bold; font-size: 14px;">{{$errors->first('var4')}}</span>
                    @endif
              <span>Вариант 4</span>
              <input type="text" value="{{$question->variant4}}" name="var4"/>
            </div>
            <div class="box-answers">
              <input type="radio" name="answer" value="4" id="r-answers-4"/>
              <label for="r-answers-4">
                <span></span>
              </label>
              <span>Правильный</span>
            </div>
          </div>
    
        </div>
      </div>
      <div class="add-regulation">
        <div>
          <p>Общие положения</p>
          <div>
              
                 <select class="selectpicker" size="1" id="get_item_pdd" name="get_item_pdd">
                   <option disabled selected value>Выбор пункта</option>
                         @foreach ($itemsPdd as $item)
                         
                          @if($item->id == $question->get_item_pdd)
                            <option selected value="{{$item->id }}">{{$item->id }}. {{$item->text}}</option>
                          @else
                          <option value="{{$item->id }}">{{$item->id }}. {{$item->text}}</option>
                          @endif
                         

                    

                        @endforeach
                </select>
              
              
           
          </div>
        </div>
          
          <div style="border-bottom: 1px solid; padding-bottom: 20px;">
          <div>
              
               <select class="selectpicker" size="1" id="get_sub_item_pdd" name="get_sub_item_pdd">
                     <option disabled selected value>Выбор подпункта</option>
                           @if($question->get_sub_item_pdd)
                        <option selected value="{{$question->subItemPdd->first()->id}}">{{$question->subItemPdd->first()->numeral}} {{$question->subItemPdd->first()->title}} {!!$question->subItemPdd->first()->text!!}</option>
                       @endif   
                </select>
          </div>
        </div>
          
          
          
          <div>
          <p>Знаки</p>
          <div>
              
              
                 <select class="selectpicker" size="1" id="get_sing_pdd" name="get_sing_pdd">
                   <option disabled selected value>Выбор пункта</option>
                          @foreach ($categorySing as $catSing)
                          
                          @if($catSing->id == $question->get_sing_pdd)
                            <option selected value="{{$catSing->id }}">{{$catSing->id }}. {{$catSing->title}}</option>
                          @else
                          <option value="{{$catSing->id }}">{{$catSing->id }}. {{$catSing->title}}</option>
                          @endif

                     

                        @endforeach
                </select>
              
              
           
          </div>
        </div>
          
          <div style="border-bottom: 1px solid; padding-bottom: 20px;">
          <div>
              
               <select class="selectpicker" size="1" id="sing_pdd" name="sing_pdd">
                     <option disabled selected value>Выбор подпункта</option>
                       @if($question->sing_pdd)
                        <option selected value="{{$question->getSing->first()->id}}">{{$question->getSing->first()->numeral}} {{$question->getSing->first()->title}} {!!$question->getSing->first()->text!!}</option>
                       @endif      
                </select>
          </div>
        </div>
          
          
           <div>
          <p>Дорожная разметка</p>
          <div>
              
                 
                     <select class="selectpicker" size="1" id="get_marking_pdd" name="get_marking_pdd">
                    <option disabled selected value>Выбор пункта</option>
                           @foreach ($categorMarkings as $marking)
                                
                           
                           
                            @if($marking->id == $question->get_marking_pdd)
                            <option selected value="{{$marking->id }}">{{$marking->id }}. {{$marking->title}}</option>
                          @else
                         <option value="{{$marking->id }}">{{$marking->id }}. {{$marking->title}}</option>
                          @endif
                           
                     

                        @endforeach   
                </select>
              

          </div>
        </div>
          
          <div style="border-bottom: 1px solid; padding-bottom: 20px;">
          <div>
              
               <select class="selectpicker" size="1" id="marking_pdd" name="marking_pdd">
                     <option disabled selected value>Выбор подпункта</option>
                          @if($question->marking_pdd)
                        <option selected value="{{$question->getMarking->first()->id}}">{{$question->getMarking->first()->numeral}} {{$question->getMarking->first()->title}} {!!$question->getMarking->first()->text!!}</option>
                       @endif    
                     

                        
                </select>
          </div>
        </div>
          
          
           <div>
          <p>Допуск</p>
          <div>
                 <select class="selectpicker" size="1" id="get_permission_pdd" name="get_permission_pdd">
                   <option disabled selected value>Выбор пункта</option>
                           @foreach ($categorPermissions as $permissions)

                     <option value="{{$permissions->id }}">{{$permissions->id }}. {{$permissions->title}}</option>

                        @endforeach
                </select>

          </div>
        </div>
          
           <div style="border-bottom: 1px solid; padding-bottom: 20px;">
          <div>
              
               <select class="selectpicker" size="1" id="permission_pdd" name="permission_pdd">
                     <option disabled selected value>Выбор подпункта</option>
                           
                </select>
          </div>
        </div>
          
            <div class="form-add-question">
          
        <p>Дополнительный комментарий</p>
        
        
        <textarea name="additional_comment" style="display:none;" class="copy-write-comment">{!!$question->additional_comment!!}</textarea>
              <br>
                                <p style="
                                  width: calc(100% - 30px);
                                min-height: 70px;
                                padding: 15px;
                                border: 1px solid #d7d7d7;
                                border-radius: 5px;
                                margin: 5px 0 25px;
                                resize: none;
                                font-family: "SF Pro Display", sans-serif;
                                font-size: 16px;
                                color: #000;

                                   contenteditable="true" class="write-comment">{!!$question->additional_comment!!}</p>
        
        
        
        
      </div>
          
        <script>
        
        var formComment = document.querySelector('.write-comment');
        var formCommentCopy = document.querySelector('.copy-write-comment');
       
        formComment.addEventListener('input', function () {
            formCommentCopy.innerHTML = formComment.innerHTML
        });
        

          </script>
          
          <br>
          
            <div>Введите местоположение, для этого щёлкните на лупу, 
                потом введите адрес и выберите пункт из выпадающего списка, 
                далее приближайте карту и кликните на нужное место.</div>
            
             <div class="box-answers-option">
  
              <span>Координаты</span>
              <input type="text" class="coordinates-map" name="coordinates" value="{{$question->coordinates}}">
              <br>
             
              </div>
                
                 <div id="map"></div>
              
              <script>
    // Initialize the map and assign it to a variable for later use
var map = L.map('map', {
    // Set latitude and longitude of the map center (required)
    center: [37.7833, -122.4167],
    // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
    zoom: 10
});

L.control.scale().addTo(map);

// Create a Tile Layer and add it to the map
//var tiles = new L.tileLayer('http://{s}.tile.stamen.com/watercolor/{z}/{x}/{y}.png').addTo(map);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  var searchControl = new L.esri.Controls.Geosearch().addTo(map);

  var results = new L.LayerGroup().addTo(map);

  searchControl.on('results', function(data){
    results.clearLayers();
    for (var i = data.results.length - 1; i >= 0; i--) {
      results.addLayer(L.marker(data.results[i].latlng));
    }
  });

var popup = L.popup();

function onMapClick(e) {
	popup
		.setLatLng(e.latlng)
		.setContent("Координаты: " + e.latlng.toString())
		.openOn(map);
        
        var inputCoordinates = document.querySelector('.coordinates-map');
        var coordinates = e.latlng.lat.toFixed(5) + ', ' + e.latlng.lng.toFixed(5);
        console.log(coordinates);
        inputCoordinates.value = coordinates;
        
}



map.on('click', onMapClick);

</script>
             <br>
              
             <div>
                 
                 @if($question->violator == '1') 
                    <label><input type="checkbox" checked="checked" name="violator"/> Добавить в категорию "Нарушители"</label>
                 @else
                 <label><input type="checkbox" name="violator"/> Добавить в категорию "Нарушители"</label>
                 @endif
                 
                 
             </div>
      </div>
        
       
        
        
      <input type="submit" value="Сохранить" class="input-add-question"/>
    </form>
  



</section>

<script>
  var btn = document.querySelector(".addImg");
                var photoFile = document.getElementById("photoInput");
                
                    btn.addEventListener('click', function (e) {
                        e.preventDefault();
                            photoFile.click();
                        })

                        var fileReader = new FileReader();

                        fileReader.addEventListener('load', function () {
                            theImage.src = this.result;
                            theImage.style.width = "100%";
                            theImage.style.height = "100%";
                            theImage.style.objectFit = "cover";
                            btn.style.display = "none";
                           
                        });

                       
                        photoInput.addEventListener('change', function (e) {
                            var file = e.target.files[0];

                            fileReader.readAsDataURL(file);
                    });
                   
                
                
                
</script>

@endsection
