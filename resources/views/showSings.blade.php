@extends('layouts/app')
@section('content')
<main class="content-sidebar" style="text-align: center;">

<div class="questions">
    @foreach($sings as $sing)
    <div>  
        <div class="text-center">  
            @if($sing->url)
            <img src="{{$sing->url}}"><br>
            @endif
            @if($sing->title)
            <span class="bold">{{$sing->title}}</span><br>
            @endif
            @if($sing->numeral)
            <span class="bold">{{$sing->numeral}}</span><br>
            @endif
        </div>

        {!!$sing->text!!}<br>
        <br>
    </div>
    @endforeach
</div>

</main>
@endsection
