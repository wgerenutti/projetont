@extends('layouts.app')


@section('content')
</br>
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Exibindo o pedido nº: {{ $pedido->id }}</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pedidos.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
                </div>
            </div>
        </div>
        </br>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pedido nº: {{ $pedido->id }}</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    {{ $pedido->status }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cliente:</strong>
                    @foreach ($pedido->clientes as $cliente)
                    {{ $cliente->nome }}
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de criação:</strong>
                    {{ date_format($pedido->created_at, 'd-m-y') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection