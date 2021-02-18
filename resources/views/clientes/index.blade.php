@extends('layouts.app')

@section('content')
</br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastro de Clientes</h2>
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
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Data de criação</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->endereco }}</td>
                <td>{{ date_format($cliente->created_at, 'd-m-Y') }}</td>
                <td>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                        <a href="{{ route('clientes.show', $cliente->id) }}" title="Visualizar">
                            <i class="fas fa-eye text-success fa-lg"></i>
                        </a>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" title="Editar">
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
                <a class="btn btn-success" href="{{ route('clientes.create') }}" title="Adicionar um Cliente"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>

    {!! $clientes->links() !!}

@endsection
