@extends('admin.principal')
@section('content')
            <div class="container-fluid">
                <h1 class="mt-4" style="margin-bottom: 60px">Orçamentos</h1>
                <div class="table-responsive" style="max-height: 400px!important">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Remetente</th>
                          <th scope="col">Contato</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Cidade de Origem</th>
                          <th scope="col">Peso Real</th>
                          <th scope="col">Qtd. Volumes</th>
                          <th scope="col">Tipo de Mercadoria</th>
                          <th scope="col">Cubagem</th>
                          <th scope="col">Comprimento</th>
                          <th scope="col">Altura</th>
                          <th scope="col">Largura</th>
                          <th scope="col">Valor da Mercadoria</th>
                          <th scope="col">Destinatário</th>
                          <th scope="col">Destino</th>
                          <th scope="col">Frete</th>
                          <th scope="col">Data</th>
                          <th scope="col">Mensagem</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($orcamentos as $o)
                        <tr>
                          <th scope="row">{{$o->id}}</th>
                          <td>{{$o->remetente}}</td>
                          <td>{{$o->contato}}</td>
                          <td>{{$o->email}}</td>
                          <td>{{$o->telefone}}</td>
                          <td>{{$o->cidade}}</td>
                          <td>{{$o->peso_real}}</td>
                          <td>{{$o->qtd_volumes}}</td>
                          <td>{{$o->tipo_mercadoria}}</td>
                          <td>{{$o->cubagem}}</td>
                          <td>{{$o->comprimento}}</td>
                          <td>{{$o->altura}}</td>
                          <td>{{$o->largura}}</td>
                          <td>{{$o->valor_mercadoria}}</td>
                          <td>{{$o->destinatario}}</td>
                          <td>{{$o->destino}}</td>
                          <td>{{$o->tipo_frete}}</td>
                          <td>{{$o->data}}</td>
                          <td>{{$o->mensagem}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
@endsection