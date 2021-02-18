@extends('layouts.app')

@section('content')
    </br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar o produto <b>"{{$produto->nome}}"</b></h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produtos.index') }}" title="Voltar"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    </br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Há um problema com seu produto<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <textarea class="form-control" style="height:50px" name="descricao"
                        placeholder="Placa mãe Asrock B450M Lenda de aço">{{ $produto->descricao }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="number" name="preco" class="form-control" placeholder="{{ $produto->preco }}"
                        value="{{ $produto->preco }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="number" name="quantidade" class="form-control" placeholder="{{ $produto->quantidade }}"
                        value="{{ $produto->quantidade }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>
@endsection
