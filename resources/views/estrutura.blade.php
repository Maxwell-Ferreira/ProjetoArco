@extends('layouts/principal')
@section('content')
    <div class="estrutura-content">
        <h1 class="home-tittle" style="margin-bottom: 60px">ESTRUTURA</h1>
        <p>Visando a segurança de nossos motoristas e a pontualidade em nossos compromissos, 
            nosso objetivo não é apenas investir em quantidade de caminhões, mas também em qualidade, 
            renovando sempre nossa frota, tendo a certeza de manter o equilíbrio financeiro e a confiança 
            de nossos clientes.</p>
        <div class="estrutura-img">
            <img alt="" src="{{asset('img/estrutura/1.jpg')}}">
            <img alt="" src="{{asset('img/estrutura/2.jpg')}}">
            <img alt="" src="{{asset('img/estrutura/3.jpg')}}">
            <img alt="" src="{{asset('img/estrutura/4.jpg')}}">
        </div>
    </div>
@endsection