@extends('layouts.principal')
@section('content')
    <div class="trabalhe-content">
        <h1 class="home-tittle" style="margin-bottom: 60px">Trabalhe conosco</h1>
        <p style="color: #757575; text-align: center; margin-bottom: 60px">
            Se você tem interesse em trabalhar conosco, siga as instruções e apresente-nos seu currículo. 
            Se preferir, envie seu currículo por e-mail: contato@pbtl.com.br
        </p>
        <form id="form-tranbalhe" action="">
            <div class="form-flex">
                <div class="form-group w50">
                    <label for="nome">Nome</label>
                    <input id="nome" name="nome" type="text" class="form-input">
                </div>
                <div class="form-group w50">
                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="email" class="form-input">
                </div>
                <div class="form-group w50">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" name="cidade" type="text" class="form-input">
                </div>
                <div class="form-group w25">
                    <label for="estado">Estado</label>
                    <input id="estado" name="estado" type="text" class="form-input">
                </div>
                <div class="form-group w25">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo" class="form-input">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>
                <div class="form-group w33">
                    <label for="estadoCivil">Estado Civil</label>
                    <select id="estadoCivil" name="estadoCivil" class="form-input">
                        <option value="casado">Casado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="separado">Separado(a)</option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="amigado">Amigado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                    </select>
                </div>
                <div class="form-group w33">
                    <label for="dataNascimento">Nascimento</label>
                    <input id="dataNascimento" name="dataNascimento" type="date" class="form-input">
                </div>
                <div class="form-group w33">
                    <label for="vaga">Vaga pretendida</label>
                    <input id="vaga" name="vaga" type="text" class="form-input">
                </div>
                <div class="form-group w25">
                    <label for="curriculo">Anexe um currículo</label>
                    <input id="curriculo" name="curriculo" type="file" class="form-input">
                </div>
                <div class="form-group w75">
                    <label for="observacoes">Observações</label>
                    <textarea id="observacoes" name="observacoes" type="text" class="form-input" rows="3"></textarea>
                </div>
            </div>
        </form>
    </div>
@endsection