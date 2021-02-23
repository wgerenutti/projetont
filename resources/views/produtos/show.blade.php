@extends('layouts.app')
@section('content')
</br>
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Mostrando o produto: "{{ $produto->nome }}"</h2>
                </div></br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('produtos.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
                </div></br>
            </div>
        </div></br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {{ $produto->nome }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    {{ $produto->descricao }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    R${{$produto->preco }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    {{ $produto->quantidade }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de criação:</strong>
                    {{ date_format($produto->created_at, 'd-m-y') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection