@extends('layouts.app')
@section('content')
</br>
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="pull-left">
                <h2>Cadastro de Pedidos</h2>
            </div>
            </br>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Status</th>
                        <th scope="col">Data de criação</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                    <tr>
                        <td scope="row">{{ $pedido->id }}</td>
                        <td scope="row">{{ $pedido->clientes }}</td>
                        <td scope="row">{{ $pedido->status }}</td>
                        <td scope="row">{{ date_format($pedido->created_at, 'd-m-Y H:i:s') }}</td>
                        <td>
                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST">
                                <a href="{{ route('pedidos.show', $pedido->id) }}" title="Visualizar">
                                    <i class="fas fa-eye text-success fa-lg"></i>
                                </a>
                                <a href="{{ route('pedidos.edit', $pedido->id) }}" title="Editar">
                                    <i class="fas fa-edit fa-lg"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Deletar" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pedidos.create') }}" title="Adicionar um Pedido"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>
</div>

{!! $pedidos->links() !!}

@endsection