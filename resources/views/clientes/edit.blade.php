@extends('layouts.app')

@section('content')
    </br>  
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar o cliente <b>"{{$cliente->nome}}"</b></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}" title="Voltar"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    </br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Há um problema com seu Cliente<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $cliente->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CPF:</strong>
                    <input type="number" name="cpf" class="form-control" placeholder="{{ $cliente->cpf }}"
                        value="{{  $cliente->cpf }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telefone:</strong>
                    <input type="number" name="telefone" class="form-control" placeholder="{{ $cliente->telefone }}"
                        value="{{  $cliente->telefone }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Endereço:</strong>
                    <input type="text" name="endereco" class="form-control" placeholder="{{ $cliente->endereco }}"
                        value="{{ $cliente->endereco }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>
@endsection
