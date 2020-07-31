@extends('layouts.principal')
@section('content')
<div class="conteudo">
    <div class="noticias-content">
        <h1 class="text-center">NOTÍCIAS</h1>
        <div class="parte">
            @foreach ($noticias as $n)
            <div class="noticia">
                <img src="{{asset('storage/'.$n->imagem)}}" width="400px">
                <div class="texto-noticia">
                    <h3>{{$n->titulo}}</h3>
                    <p>{{$n->texto}}</p>
                </div>
                <hr>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
    
@endsection