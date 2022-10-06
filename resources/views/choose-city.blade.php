@extends('layouts/app')
@section('content')


<div class="questions">
    <p class="new-questions">Выбор города</p>
    <div class="choose-city">
        <div class="choose-description">
            <p>
                На этой странице, вы можете выбрать город, для того
                что бы отображались вопросы, нужного вам места.
            </p> 
        </div>
        <br>

        <div class="all-city clearfix">
            
           <form action="/save-city" method="get">
            {{csrf_field()}}
            
            <div>
                    <div class="chooce-city" style="display: inline-block; vertical-align: top;">

                            <select size="1" id="get_raion" name="get_raion">
                                  <option selected value="none">Выбрать регион</option>
                                @foreach ($regions as $region)

                                <option value="{{$region->id }}">{{$region->name_region}}</option>

                                @endforeach
                            </select>

                        

                    </div>




                    <div class="chooce-city" style="display: inline-block; vertical-align: top;">
                      
                                 <select size="1" id="get_goroda" name="get_goroda">
                                <option selected value="none">Выбрать район</option>
                               
                                
                            </select>
                        

                    </div>

                    <div class="chooce-city" style="display: inline-block; vertical-align: top;">
                       
                        
                         <select size="1" id="get_mesto" name="get_mesto">
                                <option selected value="none">Местонахождение</option>
                                
                            </select>
                        
                    </div>

         </div>
            <div class="btn-add-question">
                <input type="submit" value="Выбрать" >
               </div>
            </form>
            <br>
               
        </div>
        <div class="btn-add-question">
                <a class="knopka" href="/reset-gorod">Сбросить</a>
             </div>
    </div>



</div>

@endsection
