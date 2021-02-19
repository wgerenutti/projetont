@extends('layouts.app')


@section('content')
    </br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $cliente->nome }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}" title="Voltar"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    </br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $cliente->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>cpf:</strong>
                {{ $cliente->cpf }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>telefone:</strong>
                {{ $cliente->telefone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Endereço:</strong>
                {{ $cliente->endereco }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data de criação:</strong>
                {{ date_format($cliente->created_at, 'd-m-y') }}
            </div>
        </div>
    </div>
@endsection
