@extends('layouts.visit')

@section('content')
    <div class="container" style="
    background-color: #FFFFFF;
    border-radius: 5%;
    box-shadow: 0 0 20px rgba(0,0,0,.15);
    margin-bottom: 20px">
        <div class="p-5">
            <h1 class="text-center">
                {{ $article->title }}
            </h1>
            <div class="row" style="justify-content: space-between; padding: 30px">
                <h4 style="color:cornflowerblue;">Категория: {{$article->category->name}}</h4>
                <p style="color:black;">{{ $article->created_at->diffForHumans() }}</p>
            </div>
            <img class="mr-auto ml-auto mw-100 mb-5" src="/{{$article->image}}" alt="">
            {!! $article->content !!}
        </div>
    </div>
@endsection
