@extends('layouts/principal')
@section('content')
    <div class="orcamento-content">
        <h1 class="home-tittle" style="margin-bottom: 60px">ORÇAMENTO</h1>
        <p style="text-align: center; color: #757575; margin-bottom: 60px">Preencha o formulário abaixo e em breve entraremos em contato!</p>
        <form id="formOrcamento" name="formOrcamento">
            @csrf
            <div class="form-flex">
                <div class="form-group w50">
                    <label for="rementente">Remetente</label>
                    <input type="text" class="form-input" id="rementente" name="rementente">
                </div>

                <div class="form-group w50">
                    <label for="contato">Contato</label>
                    <input type="text" class="form-input" id="contato" name="contato">
                </div>

                <div class="form-group w33">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-input" id="email" name="email">
                </div>

                <div class="form-group w33">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-input" id="telefone" name="telefone">
                </div>

                <div class="form-group w33">
                    <label for="cidadeOrigem">Cidade de Origem</label>
                    <input type="text" class="form-input" id="cidadeOrigem" name="cidadeOrigem">
                </div>

                <div class="form-group w25">
                    <label for="pesoReal">Peso Real</label>
                    <input type="text" class="form-input" id="pesoReal" name="pesoReal">
                </div>

                <div class="form-group w25">
                    <label for="qtdVolumes">Qtd. Volumes</label>
                    <input type="text" class="form-input" id="qtdVolumes" name="qtdVolumes">
                </div>

                <div class="form-group w50">
                    <label for="tipoMercadoria">Tipo de Mercadoria</label>
                    <input type="text" class="form-input" id="tipoMercadoria" name="tipoMercadoria">
                </div>

                <div class="form-group w25">
                    <label for="cubagem">Cubagem</label>
                    <input type="text" class="form-input" id="cubagem" name="cubagem">
                </div>

                <div class="form-group w25">
                    <label for="comprimento">Comprimento</label>
                    <input type="text" class="form-input" id="comprimento" name="comprimento">
                </div>

                <div class="form-group w25">
                    <label for="altura">Altura</label>
                    <input type="text" class="form-input" id="altura" name="altura">
                </div>

                <div class="form-group w25">
                    <label for="largura">Largura</label>
                    <input type="text" class="form-input" id="largura" name="largura">
                </div>

                <div class="form-group w25">
                    <label for="valor">Valor da Mercadoria</label>
                    <input type="text" class="form-input" id="valor" name="valor">
                </div>

                <div class="form-group w75">
                    <label for="destinatario">Destinatário</label>
                    <input type="text" class="form-input" id="destinatario" name="destinatario">
                </div>

                <div class="form-group w50">
                    <label for="destino">Destino</label>
                    <input type="text" class="form-input" id="destino" name="destino">
                </div>

                <div class="form-group w25">
                    <label for="frete">Frete</label>
                    <select class="form-input" id="frete" name="frete">
                        <option value="">- Selecione o tipo de frete -</option>
                        @foreach ($fretes as $frete)
                            <option value="{{$frete['id']}}">{{$frete['tipo_frete']}}</option>  
                        @endforeach
                    </select>
                </div>

                <div class="form-group w25">
                    <label for="data">Data</label>
                    <input type="date" class="form-input" id="data" name="data">
                </div>

                <div class="form-group w100">
                    <label for="mensagem">Mensagem</label>
                    <textarea type="text" class="form-input" id="mensagem" name="mensagem" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" name="btnOrcamento" id="btnOrcamento" class="btn btn-enviar">Enviar</button>
                    <div class="loading"></div>
                </div>

            </div>
        </form>
    </div>
@endsection