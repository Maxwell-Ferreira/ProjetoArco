@extends('admin.principal')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4" style="margin-bottom: 60px">Adicionar Notícia</h1>
@if (!empty($dados['msg']))
    <div class="{{$dados['class']}}">{{$dados['msg']}}</div>
@endif
    <form method="post" action="/admin/nova-noticia" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
        </div>
        <div class="form-group">
            <label for="texto">texto</label>
            <textarea type="password" class="form-control" id="texto" name="texto" placeholder="Texto da Notícia" rows="7"></textarea>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" class="form-control-file" name="imagem" id="imagem">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection