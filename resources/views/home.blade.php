@extends('layouts.principal')
@section('content')

<div id="content">
    <div class="carousel">
        <div id="carousel-item-1" class="carousel-item">
            <div id="carouselDegrade">
                <div class="carousel-text-left p-absolute">
                    <h1>Soluções Completas em Transporte</h1>
                    <p>Qual tipo de carga deseja transportar conosco?</p>
                </div>
            </div>
        </div>
        <div id="carousel-item-2" class="carousel-item">
            <div id="carouselDegrade">
                <div class="carousel-text-center p-absolute">
                    <h1>Segurança e pontualidade!</h1>
                    <p>Transporte de cargas secas em geral focado na satisfação dos clientes!</p>
                </div>
            </div>
        </div>
        <div id="carousel-item-4" class="carousel-item">
            <div id="carouselDegrade">
                <div class="carousel-text-right p-absolute">
                    <h1>Eficiencia em transportes!</h1>
                    <p>Contamos com uma frota com responsabilidade para com o cliente!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-empresa">
        <div class="home-empresa-text">
            <h1>A EMPRESA</h1>
            <p>Fundada no ano de 2002, fruto da fusão das Empresas Detonfer Transportes 
                e SGB Transportes que atuavam de forma separadas desde o final da década 
                de 80. A decisão dos sócios foi motivada pelo desejo de fortalecer a empresa,
                 unificar procedimentos e gerar crescimento em volume e com qualidade</p>
        </div>
        <img src="{{asset('img/empresa.jpg')}}" alt="Empresa">
    </div>
    <div style="height: 700px"></div>
</div>

@endsection