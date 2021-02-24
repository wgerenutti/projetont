@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <p class="text-center fs-1">Editar o cliente <b>"{{$cliente->nome}}"</b></p>
            <div class="float-left">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
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

            <div class="row h-100">
                <div class="col">
                    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-sm-7">
                            <strong>Nome:</strong>
                            <input type="text" name="nome" class="form-control" placeholder="{{$cliente->nome}}" value="{{$cliente->nome}}">
                        </div></br>
                        <div class="form-group col-sm-7">
                            <strong>CPF:</strong>
                            <input type="text" name="cpf" class="form-control" placeholder="{{$cliente->cpf}}" value="{{$cliente->cpf}}">
                        </div></br>
                        <div class="form-group col-sm-7">
                            <strong>Telefone:</strong>
                            <input type="number" name="telefone" class="form-control" placeholder="{{$cliente->telefone}}" value="{{$cliente->telefone}}">
                        </div></br>
                        <div class="form-group col-sm-7">
                            <strong>Endereço:</strong>
                            <input type="text" name="endereco" class="form-control" placeholder="{{ $cliente->endereco }}" value="{{$cliente->endereco}}">
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