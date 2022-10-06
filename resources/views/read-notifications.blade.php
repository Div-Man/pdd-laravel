@extends('layouts/app')
@section('content')

<br>
<br>

        <div class="">
           
           @foreach ($allData as $data)
           
            @if($data->type == 'App\Notifications\Comments')
           
            <div class="card" style=" position: relative;">
                <div class="card-body">
                    {{$data->data['data_comment']}} 
                    
                     @if($data->read_at == null)
                        <span style="color: red; font-weight: bold;">новое</span>
                            @else
                              <span style="color: green; font-weight: bold;">прочитано</span>
                    @endif
                    
                    <br><br>
                  <h5 class="card-title">{{$data->data['user_comment_name']}}, добавил комментраий к вашему вопросу - {{$data->data['question_title']}}</h5>
                  <div class="card-text">{!!$data->data['comment_text']!!}</div>
                   <br>
     
                  <a href="/question/{{$data->data['post_id']}}/idnotif/{{$data->id}}/idnotif#comment-notification-{{$data->data['comment_id']}}" class="btn btn-primary">Перейти</a>
                  <a href="/delete-notif/{{$data->id}}" class="btn btn-primary">Удалить</a>
                </div>
             </div>
           <br>
           
           @elseif($data->type == 'App\Notifications\CommentReply')
           
            <div class="card">
                <div class="card-body">
                     {{$data->data['data_comment']}} 
                     
                      @if($data->read_at == null)
                        <span style="color: red; font-weight: bold;">новое</span>
                              @else
                              <span style="color: green; font-weight: bold;">прочитано</span>
                              
                    @endif
                    <br><br>
                  <h5 class="card-title">{{$data->data['user_comment_name']}}, ответил на ваш комментарий, к вопросу - {{$data->data['question_title']}}</h5>
                  <div class="card-text">{!!$data->data['comment_text']!!}</div>
                   <br>
                   
                  
                 <a href="/question/{{$data->data['post_id']}}/idnotif/{{$data->id}}/idnotif#comment-notification-{{$data->data['comment_id']}}" class="btn btn-primary">Перейти</a>
                  <a href="/delete-notif/{{$data->id}}" class="btn btn-primary">Удалить</a>
                </div>
             </div>
           <br>
           
           @endif
            @endforeach
            
 
            <div class="paginator">
                {{auth()->user()->Notifications()->paginate(10)->links()}}
            </div>
        </div>
     
    



@endsection
