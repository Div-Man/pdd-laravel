@extends('layouts/app')
@section('content')

<main class="content-sidebar">
<div class="questions">
    @foreach($permissions as $permission)
    <div>  
       
            @if($permission->url)
            <img src="{{$permission->url}}"><br>
            @endif
            @if($permission->numeral)
            <span class="bold">{{$permission->numeral}}</span>
            @endif
            @if($permission->title)
            <span class="bold">{{$permission->title}}</span>
            @endif
            
        {!!$permission->text!!}<br>
        <br>
    </div>
    @endforeach
</div>
</main>

@endsection
