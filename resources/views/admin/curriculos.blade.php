@extends('admin.principal')
@section('content')
            <div class="container-fluid">
                <h1 class="mt-4" style="margin-bottom: 60px">Curriculos</h1>
                <div class="table-responsive" style="max-height: 400px!important">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">E-Mail</th>
                          <th scope="col">Cidade</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Sexo</th>
                          <th scope="col">Estado Civil</th>
                          <th scope="col">Nascimento</th>
                          <th scope="col">Vaga pretendida</th>
                          <th scope="col">Currículo</th>
                          <th scope="col">Observações</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($curriculos as $c)
                        <tr>
                          <th scope="row">{{$c->id}}</th>
                          <td>{{$c->nome}}</td>
                          <td>{{$c->email}}</td>
                          <td>{{$c->cidade}}</td>
                          <td>{{$c->sigla}}</td>
                          <td>{{$c->sexo}}</td>
                          <td>{{$c->estado_civil}}</td>
                          <td>{{$c->nascimento}}</td>
                          <td>{{$c->vaga}}</td>
                          <td>{{$c->curriculo}}</td>
                          <td>{{$c->observacoes}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
@endsection