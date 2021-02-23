@extends('layouts.app')
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <h2>Editar o produto <b>"{{$produto->nome}}"</b></h2>
            </h2>
            <div class="float-left">
                <a class="btn btn-primary" href="{{ route('produtos.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
            </div></br>
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
            <div class="row">
                <div class="col">
                    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-sm-7">
                            <strong>Nome:</strong>
                            <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" placeholder="Nome">
                        </div></br>
                        <div class="form-group col-sm-7">
                            <strong>Descrição:</strong>
                            <textarea class="form-control" name="descricao" placeholder="Placa mãe Asrock B450M Lenda de aço">{{ $produto->descricao }}</textarea>
                        </div></br>
                        <div class="form-group col-sm-7">
                            <strong>Preço:</strong>
                            <input type="number" name="preco" class="form-control" placeholder="{{ $produto->preco }}" value="{{ $produto->preco }}">
                        </div></br>
                        <div class="form-group col-sm-7">
                            <strong>Quantidade:</strong>
                            <input type="number" name="quantidade" class="form-control" placeholder="{{ $produto->quantidade }}" value="{{ $produto->quantidade }}">
                        </div></br>
                        <div class="col-xs-12 col-sm-12 col-md-7 text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection