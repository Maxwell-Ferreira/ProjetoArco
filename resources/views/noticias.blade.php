@extends('layouts.principal')
@section('content')
    <div class="noticias-content">
        <h1 class="home-tittle" style="margin-bottom: 60px">NOTÍCIAS</h1>
        @foreach ($noticias as $n)
        <div class="noticia">
            <img src="{{asset('storage/'.$n->imagem)}}" width="400px">
            <div class="texto-noticia">
                <h2>{{$n->titulo}}</h2>
                <p>{{$n->texto}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection