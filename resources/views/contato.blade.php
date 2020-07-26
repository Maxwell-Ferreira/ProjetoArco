@extends('layouts/principal')
@section('content')
    <div class="contato-content">
        <h1 class="home-tittle">Contato</h1>
        <div class="contato">
            <div class="contato-dados">
                <h2>Matriz</h2>
                <p>Rod. BR 101 – km 210 – Nº 08
                    Caixa Postal 39 – Bairro Pedra Branca
                    Ibiraçu – ES
                    CEP: 29.670-000
                    Tel.: (27) 3257 1523 / 3257 1753</p>
                <h2>Filiais</h2>
                <p>Rod. BR 232, Km 22, Sala 08
                    Bairro Manassu
                    Jaboatão Dos Guararapes – PE
                    CEP: 54.130-340
                    (027) 99277 2200</p>
                <p>Rod. BR 316, Km 58 S/N Sala 47
                    Centro, Trindade – PE
                    CEP: 56.250-000
                    (027) 99277 2200</p>
                <p>Rua Amaro Cavalcante, nº 04 - Sala 2
                    Centro
                    Mossoró - RN
                    CEP: 59.623-300
                    (027) 99277 2200</p>
            </div>
            <div class="contato-form">
                <form action="/contato" method="POST" id="formContato" name="formContato">
                    @csrf
                    <div class="form-flex">
                        <div class="form-group w100">
                            <label for="nome">Nome</label>
                            <input id="nome" name="nome" type="text" class="form-input">
                        </div>
                        <div class="form-group w100">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="email" class="form-input">
                        </div>
                        <div class="form-group w100">
                            <label for="telefone">Telefone Fixo</label>
                            <input id="telefone" name="telefone" type="text" class="form-input">
                        </div>
                        <div class="form-group w100">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" type="text" class="form-input" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1876.7948324829645!2d-40.36658789198522!3d-19.814987842970307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb795be6e423b57%3A0x4a219484ec9b910d!2sPedra%20Branca%20Transportes%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1595772369973!5m2!1spt-BR!2sbr" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
@endsection

