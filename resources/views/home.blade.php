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
                <div class="carousel-text-right p-absolute" style="text-align: right">
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
    <div class="home-frota">
        <h1 class="home-tittle" style="margin-bottom: 40px"> CONHEÇA NOSSA FROTA </h1>
        <div class="frota-item">
            <img src="{{asset('img/frota/4.jpg')}}" alt="Nossa Frota" class="frota-img">
            <div class="frota-text">
                <h2>Moderna Tecnologia</h2>
                <p>Estamos sempre precupados com a satisfação de nossos clientes. Em consequencia
                     de grandes demandas de transporte, sabemos que o uso de tecnologia proporciona
                      redução de custos, assim como redução de frete.</p>
            </div>
        </div>
        <div class="frota-item flex-row-reverse">
            <img src="{{asset('img/frota/2.jpg')}}" alt="Nossa Frota" class="frota-img">
            <div class="frota-text">
                <h2>Moderna Tecnologia</h2>
                <p>Estamos sempre precupados com a satisfação de nossos clientes. Em consequencia
                     de grandes demandas de transporte, sabemos que o uso de tecnologia proporciona
                      redução de custos, assim como redução de frete.</p>
            </div>
        </div>
        <div class="frota-item">
            <img src="{{asset('img/frota/9.jpg')}}" alt="Nossa Frota" class="frota-img">
            <div class="frota-text">
                <h2>Profissionais Capacitados</h2>
                <p>Nada adianta equipamentos sofisticados sem bons profissionais. Investimos fortemente
                     em capacitação e qualificação para nossos profissionais.</p>
            </div>
        </div>
    </div>
    <div id="homeServicos" class="home-servicos">
        <h1 class="home-tittle">CONHEÇA NOSSOS SERVIÇOS</h1>
        <P style="text-align: center">Operamos com cargas fechadas das mais variadas, sendo embaladas em caixas, pallets,
             containers, fardos, big bags ou granéis sólidos.</P>
        <div class="home-img-servicos" style="margin-top: 40px">
            <div id="materiais" class="home-img-servicos-bg">
                <div class="home-servicos-content">
                    <h2>MATERIAIS DE<br> CONSTRUÇÃO</h2>
                </div>
            </div>
            <div id="moveis" class="home-img-servicos-bg">
                <div class="home-servicos-content">
                    <h2>MÓVEIS</h2>
                </div>
            </div>
            <div id="madeiras" class="home-img-servicos-bg">
                <div class="home-servicos-content">
                    <h2>MADEIRAS</h2>
                </div>
            </div>
            <div id="alimentos" class="home-img-servicos-bg">
                <div class="home-servicos-content">
                    <h2>ALIMENTOS</h2>
                </div>
            </div>
        </div>
        <div class="home-img-servicos">
            <div id="siderurgicos" class="home-img-servicos-bg">
                <div class="home-servicos-content">
                    <h2>PRODUTOS<br> SIDERÚRGICOS</h2>
                </div>
            </div>
            <div id="industria" class="home-img-servicos-bg">
                <div class="home-servicos-content">
                    <h2>MATÉRIAS PRIMAS<BR> INDUSTRIAIS</h2>
                </div>
            </div>
            <div id="adubos" class="home-img-servicos-bg">
                <div class="home-servicos-content">
                    <h2>ADUBOS</h2>
                </div>
            </div>
            <div id="logistica" class="home-img-servicos-bg">
                <div class="home-servicos-content">
                    <h2>LOGÍSTICA EM <br> GERAL</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="home-parceiros">
        <h1 class="home-tittle">PRINCIPAIS PARCEIROS</h1>
        <div class="parceiros">
            <img src="{{asset('img/parceiros/nutriave.png')}}" alt="">
            <img src="{{asset('img/parceiros/vamtec.png')}}" alt="">
            <img src="{{asset('img/parceiros/placas-do-brasil.png')}}" alt="">
            <img src="{{asset('img/parceiros/roca.png')}}" alt="">
        </div>
    </div>
</div>

@endsection