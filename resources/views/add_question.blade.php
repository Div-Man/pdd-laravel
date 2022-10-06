
@extends('layouts/app')
@section('content')



    <h2>Добавление вопроса</h2>
        
    <form action="/store-question" method="post" enctype="multipart/form-data" class="add-question">
         {{csrf_field()}}
      <div class="form-add-address">
         
            @if ($errors->has('get_raion'))
                            <span style="color: red; font-weight: bold;">{{$errors->first('get_raion')}}</span>
                        @endif
          
        <select title="Выберите регион" size="1" id="get_raion" name="get_raion">
          <option disabled selected="selected">Регион</option>
          @foreach ($regions as $region)

               <option value="{{$region->id }}">{{$region->name_region}}</option>

           @endforeach
        </select>
          
          

         
          
                        @if ($errors->has('get_goroda'))
                            <span style="color: red; font-weight: bold;">{{$errors->first('get_goroda')}}</span>
                        @endif
         
        <select size="1" id="get_goroda" name="get_goroda" title="Выберите город">
          <option disabled selected="selected">Город</option>
        </select>
          
         
        <select title="Выберите адрес" size="1" id="get_mesto" name="get_mesto">
          <option disabled selected="selected">Адрес</option>
        </select>
      </div>
        
    @if ($errors->has('image'))
               <div style="color: red; font-weight: bold; width: 100%; margin-bottom: 5px;">{{$errors->first('image')}}</div>
        @endif
        
      <div class="form-add-photo">
         
          
        <label>
          <input type="file" title="" name="image" id="photoInput"/>
          <img src="img/icons/icon-15.png" alt="icon" title="" id="theImage"/>
          <p class="addImg">Добавить фото</p>
        </label>
                    
                    
      </div>
        
         
        

        
      <div class="form-add-question">
           @if ($errors->has('question_description'))
                        <span style="color: red; font-weight: bold;">{{$errors->first('question_description')}}</span>
                    @endif
        <p>Ваш вопрос</p>
        <textarea name="question_description">{{old('question_description')}}</textarea>
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
              <input type="text" value="{{old('var1')}}" name="var1"/>
            </div>
            <div class="box-answers">
              <input type="radio" name="answer" value="1" checked="checked" id="r-answers-1"/>
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
              <input type="text" value="{{old('var2')}}" name="var2"/>
            </div>
            <div class="box-answers">
              <input type="radio" name="answer" value="2" id="r-answers-2"/>
              <label for="r-answers-2">
                <span></span>
              </label>
              <span>Правильный</span>
            </div>
          </div>
        </div>
        <button type="button" onclick="addAnswer()">
          <span>+</span>
          <p>Добавить еще вариант</p>
        </button>
      </div>
      <div class="add-regulation">
        <div>
          <p>Общие положения</p>
          <div>
              
                 <select class="selectpicker" size="1" id="get_item_pdd" name="get_item_pdd">
                   <option disabled selected value>Выбор пункта</option>
                         @foreach ($itemsPdd as $item)

                     <option value="{{$item->id }}">{{$item->id }}. {{$item->text}}</option>

                        @endforeach
                </select>
              
              
           
          </div>
        </div>
          
          <div style="border-bottom: 1px solid; padding-bottom: 20px;">
          <div>
              
               <select class="selectpicker" size="1" id="get_sub_item_pdd" name="get_sub_item_pdd">
                     <option disabled selected value>Выбор подпункта</option>
                           
                </select>
          </div>
        </div>
          
          
          
          <div>
          <p>Знаки</p>
          <div>
              
              
                 <select class="selectpicker" size="1" id="get_sing_pdd" name="get_sing_pdd">
                   <option disabled selected value>Выбор пункта</option>
                          @foreach ($categorySing as $catSing)

                     <option value="{{$catSing->id }}">{{$catSing->id }}. {{$catSing->title}}</option>

                        @endforeach
                </select>
              
              
           
          </div>
        </div>
          
          <div style="border-bottom: 1px solid; padding-bottom: 20px;">
          <div>
              
               <select class="selectpicker" size="1" id="sing_pdd" name="sing_pdd">
                     <option disabled selected value>Выбор подпункта</option>
                           
                </select>
          </div>
        </div>
          
          
           <div>
          <p>Дорожная разметка</p>
          <div>
              
                 
                     <select class="selectpicker" size="1" id="get_marking_pdd" name="get_marking_pdd">
                    <option disabled selected value>Выбор пункта</option>
                           @foreach ($categorMarkings as $marking)

                     <option value="{{$marking->id }}">{{$marking->id }}. {{$marking->title}}</option>

                        @endforeach   
                </select>
              

          </div>
        </div>
          
          <div style="border-bottom: 1px solid; padding-bottom: 20px;">
          <div>
              
               <select class="selectpicker" size="1" id="marking_pdd" name="marking_pdd">
                     <option disabled selected value>Выбор подпункта</option>
                         @foreach ($categorMarkings as $marking)

                     <option value="{{$marking->id }}">{{$marking->id }}. {{$marking->title}}</option>

                        @endforeach   
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
        <textarea name="additional_comment">{{old('additional_comment')}}</textarea>
      </div>
          
          <br>
          
           <div>Введите местоположение, для этого щёлкните на лупу, 
                потом введите адрес и выберите пункт из выпадающего списка, 
                далее приближайте карту и кликните на нужное место.</div>
            
             <div class="box-answers-option">
  
              <span>Координаты</span>
              <input type="text" name="coordinates" class="coordinates-map">
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
                 <label><input type="checkbox" name="violator"/> Добавить в категорию "Нарушители"</label>
             </div>
      </div>
        
       
        
        
      <input type="submit" value="Добавить вопрос" class="input-add-question"/>
    </form>
  


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
