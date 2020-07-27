@extends('admin.principal')
@section('content')
            <div class="container-fluid">
                <h1 class="mt-4" style="margin-bottom: 60px">Noticias</h1>
                @if (!empty($dados['msg']))
                <div class="{{$dados['class']}}">{{$dados['msg']}}</div>
                @endif
                <div class="table-responsive" style="max-height: 400px!important">
                    <a href="/admin/nova-noticia" class="btn btn-primary" style="margin-bottom: 30px">Adicionar Notícia</a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Titulo</th>
                          <th scope="col">Texto</th>
                          <th scope="col">Imagem</th>
                          <th scope="col">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($noticias as $n)
                        <tr>
                          <th scope="row">{{$n->id}}</th>
                          <td>{{$n->titulo}}</td>
                          <td>{{$n->texto}}</td>
                          <td><img src="{{asset('storage/'.$n->imagem)}}" width="70px"></td>
                          <td>
                            <form action="/admin/delNoticia/{{$n->id}}" method="post">
                              @method("DELETE")
                              @csrf
                              <button type="submit" class="btn btn-danger">Apagar</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
@endsection