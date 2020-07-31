@extends('layouts/principal')
@section('content')
    <div class="conteudo">
        <div class="parte">
            <h1 class="text-center">Contato</h1>
            <p class="text-center">Nos envie uma mensagem!</p>
        </div>
        <div class="parte">
            <form id="formContato" name="formContato">
                @csrf
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input id="nome" name="nome" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone Fixo</label>
                            <input id="telefone" name="telefone" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" type="text" class="form-control" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Enviar</button>
                            <div class="loading"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="parte contato-bottom">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Matriz</h4>
                            <p>Rod. BR 101 – km 210 – Nº 08 <br>
                                Caixa Postal 39 – Bairro Pedra Branca<br>
                                Ibiraçu – ES<br>
                                CEP: 29.670-000<br>
                                Tel.: (27) 3257 1523 / 3257 1753</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Filiais</h4>
                            <p>Rod. BR 232, Km 22, Sala 08<br>
                                Bairro Manassu<br>
                                Jaboatão Dos Guararapes – PE<br>
                                CEP: 54.130-340<br>
                                (027) 99277 2200</p>
                                
                                
                            <p>Rod. BR 316, Km 58 S/N Sala 47<br>
                                Centro, Trindade – PE<br>
                                CEP: 56.250-000<br>
                                (027) 99277 2200</p>
                                
                                
                            <p>Rua Amaro Cavalcante, nº 04 - Sala 2<br>
                                Centro<br>
                                Mossoró - RN<br>
                                CEP: 59.623-300<br>
                                (027) 99277 2200</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parte">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1876.7948324829645!2d-40.36658789198522!3d-19.814987842970307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb795be6e423b57%3A0x4a219484ec9b910d!2sPedra%20Branca%20Transportes%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1595772369973!5m2!1spt-BR!2sbr" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
@endsection

