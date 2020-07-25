@extends('layouts/principal')
@section('content')

<div class="sobre-content">
    <h1 class="home-tittle">A EMPRESA</h1>
    <div class="sobre">
        <img src="{{asset('img/banner/3.jpg')}}" alt="Empresa">
        <div class="sobre-text">
            <p>Fundada no ano de 2002, fruto da fusão das Empresas Detonfer Transportes e SGB Transportes que atuavam
                de forma separadas desde o final da década de 80. A decisão dos sócios foi motivada pelo desejo de 
                fortalecer a empresa, unificar procedimentos e gerar crescimento em volume e com qualidade.
           </p>
           <p>
               Desde o início das atividades das empresas que deram origem a Pedra Branca Transportes, nos concentramos
                no transporte de cargas gerais de longa distância, em especial percorrendo a região Nordeste do Pais.
                 Para alavancar os negócios, em período mais recente, passamos a realizar operações também no Sudeste e 
                 Sul.
           </p>
        </div> 
    </div>
    <div class="sobre-bottom">
        <p>
            Durante esta caminhada conquistamos valiosos parceiros que contribuíram decisivamente para o crescimento
             da empresa. Nos especializamos na busca de matéria-prima para produção industrial e também na distribuição
              do produto acabado até os centros consumidores.
        </p>
        <p>
            Nesta nova fase buscamos parceiros que possibilitem rotas com cargas de médias e longas distâncias,
             sempre com foco no transporte de insumos que viabilizem a produção de suas plantas ou na distribuição
              dos produtos da indústria.
        </p>
    </div>
    <div class="sobre-subtitulos">
        <div class="sobre-section">
            <h2>Missão</h2>
            <p>Ser facilitador entre quem produz e consumidores, valorizando pessoas, 
                transportando sonhos e prosperidade.</p>
        </div>
        <div class="sobre-section">
            <h2>Visão</h2>
            <p>Estar presente em todas as regiões do país, ser referência em transporte 
                personalizado, valorização de pessoas e rentabilidade através das gerações.</p>
        </div>
        <div class="sobre-section">
            <h2>Valores</h2>
            <p>Compartilhar sucessos - Comprometimento - Humildade - Honestidade - Gratidão - Justiça - Simplicidade</p>
        </div>
    </div>
</div>


@endsection