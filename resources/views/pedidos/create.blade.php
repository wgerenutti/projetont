@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="pull-left">
                <p class="text-center fs-1">Cadastrar novo Pedido</p>
                {{ $produtos}}
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('pedidos.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
                </div></br>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Há um problema com seu pedido<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row h-100">
                    <div class="col">
                        <form action="{{ route('pedidos.store') }}" method="POST">
                            @csrf
                            <div class="custom-select">
                                <select style=width:400px name="clientes_id" class="form-control">
                                    <option selected>-- Selecione o Cliente --</option>
                                    @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id}}">{{ $cliente->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </br>
                            <div class="custom-select">
                                <select style=width:400px name="status" class="form-control">
                                    <option selected>-- Selecione o Status --</option>
                                    <option value=aberto>Em aberto</option>
                                    <option value=pago>Pago</option>
                                    <option value=cancelado>Cancelado</option>
                                </select>
                            </div>
                            </br>
                            <div class="col-xs-12 col-sm-12 col-md-7 text-center">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection