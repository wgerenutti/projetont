@extends('layouts.app')
@section('content')
</br>
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Mostrando o cliente: "{{ $cliente->nome }}"</h2>
                </div></br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('clientes.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $cliente->nome }}
                    </div>
                </div></br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CPF:</strong>
                        {{ $cliente->cpf }}
                    </div>
                </div></br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Telefone:</strong>
                        {{ $cliente->telefone }}
                    </div>
                </div></br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Endereço:</strong>
                        {{ $cliente->endereco }}
                    </div>
                </div></br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Data de criação:</strong>
                        {{ date_format($cliente->created_at, 'd-m-Y H:i:s') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection