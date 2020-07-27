@extends('admin.principal')
@section('content')
            <div class="container-fluid">
                <h1 class="mt-4" style="margin-bottom: 60px">Mensagens</h1>
                <div class="table-responsive" style="max-height: 400px!important">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Mensagem</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($mensagens as $m)
                        <tr>
                          <th scope="row">{{$m->id}}</th>
                          <td>{{$m->nome}}</td>
                          <td>{{$m->email}}</td>
                          <td>{{$m->telefone}}</td>
                          <td>{{$m->mensagem}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
@endsection