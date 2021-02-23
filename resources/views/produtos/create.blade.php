@extends('layouts.app')
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="pull-left">
                <p class="text-center fs-1">Cadastrar novo produto</p>
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('produtos.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </div></br>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Há um problema com seu prodto<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('produtos.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-xs-12 col-sm-12 col-md-7">
                                <strong>Nome:</strong>
                                <input type="text" name="nome" class="form-control" placeholder="Placa mãe">
                            </div></br>
                            <div class="form-group col-xs-12 col-sm-12 col-md-7">
                                <strong>Descrição:</strong>
                                <textarea class="form-control" name="descricao" placeholder="Placa mãe Asrock B450M Lenda de aço"></textarea>
                            </div></br>
                            <div class="form-group col-xs-12 col-sm-12 col-md-7">
                                <strong>Preço:</strong>
                                <input type="number" name="preco" class="form-control" placeholder="R$700,00">
                            </div></br>
                            <div class="form-group col-xs-12 col-sm-12 col-md-7">
                                <strong>Quantidade:</strong>
                                <input type="number" name="quantidade" class="form-control" placeholder="10">
                            </div></br>
                            <div class="col-xs-12 col-sm-12 col-md-7 text-center">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection