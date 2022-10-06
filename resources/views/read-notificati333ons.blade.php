@extends('layouts/app')
@section('content')


 <section class="section main-content">
        <div class="container">
           
           @foreach ($allData as $data)
            
          
           {$data->data['user_comment_name']}
           
           {{$data->data['comment_text']}}
           
            @endforeach
            
 
            <div class="paginator">
                {auth()->user()->Notifications()->paginate(1)->links()}
            </div>
        </div>
     
      </section>



@endsection
