<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Senha - Adm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 60px">   
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center card-tittle" style="margin: 30px 0;">Alterar a Senha de login de ADM</h3>
                        <form action="/admin/mudar-senha" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="senha">Nova senha:</label>
                                <input id="senha" name="senha" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                        <a href="/admin">Voltar para a tela de admin</a>
                    </div>
                    <div class="card-footer">
                        @if(isset($msg))
                        <div class="{{$msg['class']}}">{{$msg['msg']}}</div>
                        @endif
                        <p class="text-center">Pedra Branca Transportes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>