@extends('layouts/app')
@section('content')



<main class="content-sidebar">
    <button type="button" id="button-menu" onclick="openMenu()">&equiv;</button>
    <div class="container">
        <h2>Правила дорожного движения</h2>
        <nav class="nav-pdd">
            <ul>


                @foreach($itemsPdd as $item)
                <li>
                    <a href="/pdd/item/{{$item->id}}">{{$item->text}}</a>
                </li>
                @endforeach
            </ul>
            <h3><b>Знаки дорожного движения</b></h3>
            <ul>




                @foreach($categorySing as $catSing)
                <li>
                    <a href="/pdd/sings/{{$catSing->id}}">{{$catSing->title}}</a>
                </li>
                @endforeach

            </ul>
            <h3><b>Дорожная разметка</b></h3>
            <ul>

                @foreach($categoryRoadMarking as $catRoadMarking)
                <li>
                    <a href="/pdd/marking/{{$catRoadMarking->id}}">{{$catRoadMarking->title}}</a>
                </li>
                @endforeach

            </ul>
            <h3><b>Допуск</b></h3>
            <ul>

                @foreach($categoryPermission as $catPermission)
                <li>
                    <a href="/pdd/permission/{{$catPermission->id}}">{{$catPermission->title}}</a>
                </li>
                @endforeach

            </ul>
        </nav>
    </div>
</main>


@endsection
