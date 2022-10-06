@extends('layouts/app')
@section('content')

<main class="content-sidebar">
<div class="questions">
   @foreach($subItems as $item)
   <div>
       <span class="bold">{{$item->title}}</span> {!!$item->text!!}
   </div><br>
   @endforeach
</div>

</main>
@endsection
