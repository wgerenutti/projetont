@extends('layouts.app')

@section('content')
</br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastro de Pedidos</h2>
            </div>
        </div>
    </div>
    </br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Nº</th>
            <th>Cliente</th>
            <th>Status</th>
            <th width="280px">Data de criação</th>
            <th>Ação</th>
        </tr>
        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td></td>
                <td>{{ $pedido->status }}</td>
                <td>{{ date_format($pedido->created_at, 'd-m-Y H:i:s') }}</td>
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
    </table>
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pedidos.create') }}" title="Adicionar um Pedido"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>

    {!! $pedidos->links() !!}

@endsection
