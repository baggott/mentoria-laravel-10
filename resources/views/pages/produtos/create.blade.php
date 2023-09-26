@extends('index')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Criar Novo Produto</h1>
</div>
    <form class="form" method="POST" action="{{ route('cadastrar.produto') }}">
        @csrf
            <div class="mb-3">
                <label  class="form-label">Nome do Produto</label>
                <input type="text" class="form-control"  name="nome" placeholder="Nome do produtor">
            </div>
            <div class="mb-3">
                <label class="form-label">Valor do Produto</label>
                <input type="text" class="form-control"  name="valor" placeholder="Valor do produto">
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
    @endsection