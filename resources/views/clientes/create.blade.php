@extends('layouts.app')
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="pull-left">
                <p class="text-center fs-1">Cadastrar novo Cliente</p>
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('clientes.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
                </div></br>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Há um problema com seu cliente<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group col-xs-12 col-sm-12 col-md-7">
                                <strong>Nome:</strong>
                                <input type="text" name="nome" class="form-control" placeholder="João da Silva Alberto">
                            </div></br>
                            <div class="form-group col-xs-12 col-sm-12 col-md-7">
                                <strong>CPF:</strong>
                                <input type="text" name="cpf" class="form-control" placeholder="111.111.111-11">
                            </div></br>
                            <div class="form-group col-xs-12 col-sm-12 col-md-7">
                                <strong>Telefone:</strong>
                                <input type="number" name="telefone" class="form-control" placeholder="(33)3333-3333">
                            </div></br>
                            <div class="form-group col-xs-12 col-sm-12 col-md-7">
                                <strong>Endereço:</strong>
                                <input type="text" name="endereco" class="form-control" placeholder="Rua Das Flores n95 Jardim Maracanã - Londrina - PR">
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