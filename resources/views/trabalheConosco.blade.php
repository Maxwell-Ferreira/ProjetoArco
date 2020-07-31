@extends('layouts.principal')
@section('content')
    <div class="conteudo">
        <div class="parte text-center">
            <h1>Trabalhe Conosco</h1>
            <p>
                Se você tem interesse em trabalhar conosco, siga as instruções e apresente-nos seu currículo. 
                Se preferir, envie seu currículo por e-mail: contato@pbtl.com.br
            </p>
        </div>
        <div class="parte">
            <form id="form-tranbalhe" enctype="multipart/form-data" method="post" action="/trabalhe-conosco">
                @csrf
                @if (!empty($dados))
                    <h3 style="text-align: center; color:{{$dados['color']}}">{{$dados['msg']}}</h3>
                @endif
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input id="nome" name="nome" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="email" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" name="cidade" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
                            <option value="">- Selecione um Estado -</option>
                            @foreach ($estados as $estado)
                                <option value="{{$estado['id']}}">{{$estado['estado']}}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" name="sexo" class="form-control">
                            <option value="">- Selecione um Estado -</option>
                            @foreach ($sexos as $sexo)
                                <option value="{{$sexo['id']}}">{{$sexo['sexo']}}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estadoCivil">Estado Civil</label>
                        <select id="estadoCivil" name="estadoCivil" class="form-control">
                            <option value="">- Selecione um Estado Civil -</option>
                            @foreach ($estadosCivis as $estadoCivil)
                                <option value="{{$estadoCivil['id']}}">{{$estadoCivil['estado_civil']}}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dataNascimento">Nascimento</label>
                        <input id="dataNascimento" name="dataNascimento" type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="vaga">Vaga pretendida</label>
                        <input id="vaga" name="vaga" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="curriculo">Anexe um currículo</label>
                        <input id="curriculo" name="curriculo" type="file" class="form-control-file">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="observacoes">Observações</label>
                        <textarea id="observacoes" name="observacoes" type="text" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection