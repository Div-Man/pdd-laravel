@extends('layouts/app')
@section('content')

<main class="content-sidebar">
<div class="questions">
    @foreach($markings as $marking)
    <div>  
        <div class="text-center">  
            @if($marking->url)
            <img src="{{$marking->url}}"><br>
            @endif
            @if($marking->title)
            <span class="bold">{{$marking->title}}</span><br>
            @endif
            @if($marking->numeral)
            <span class="bold">{{$marking->numeral}}</span><br>
            @endif
        </div>

        {!!$marking->text!!}<br>
        <br>
    </div>
    @endforeach
</div>
</main>>

@endsection
