@extends('layouts/principal')
@section('content')
    <div class="conteudo">
        <div class="parte text-center">
            <h1>Orçamento</h1>
            <p>
                Preencha o formulário abaixo que em breve entraremos em contato!
            </p>
        </div>
        <div class="parte">
            <form id="formOrcamento" name="formOrcamento">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="rementente">Remetente</label>
                        <input type="text" class="form-control" id="rementente" name="rementente">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="contato">Contato</label>
                        <input type="text" class="form-control" id="contato" name="contato">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cidadeOrigem">Cidade de Origem</label>
                        <input type="text" class="form-control" id="cidadeOrigem" name="cidadeOrigem">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="pesoReal">Peso Real</label>
                        <input type="text" class="form-control" id="pesoReal" name="pesoReal">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="qtdVolumes">Qtd. Volumes</label>
                        <input type="text" class="form-control" id="qtdVolumes" name="qtdVolumes">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="tipoMercadoria">Tipo de Mercadoria</label>
                        <input type="text" class="form-control" id="tipoMercadoria" name="tipoMercadoria">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cubagem">Cubagem</label>
                        <input type="text" class="form-control" id="cubagem" name="cubagem">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="comprimento">Comprimento</label>
                        <input type="text" class="form-control" id="comprimento" name="comprimento">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="altura">Altura</label>
                        <input type="text" class="form-control" id="altura" name="altura">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="largura">Largura</label>
                        <input type="text" class="form-control" id="largura" name="largura">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="valor">Valor da Mercadoria</label>
                        <input type="text" class="form-control" id="valor" name="valor">
                    </div>

                    <div class="form-group col-md-9">
                        <label for="destinatario">Destinatário</label>
                        <input type="text" class="form-control" id="destinatario" name="destinatario">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="destino">Destino</label>
                        <input type="text" class="form-control" id="destino" name="destino">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="frete">Frete</label>
                        <select class="form-control" id="frete" name="frete">
                            <option value="">- Selecione o tipo de frete -</option>
                            @foreach ($fretes as $frete)
                                <option value="{{$frete['id']}}">{{$frete['tipo_frete']}}</option>  
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="data">Data</label>
                        <input type="date" class="form-control" id="data" name="data">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="mensagem">Mensagem</label>
                        <textarea type="text" class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection