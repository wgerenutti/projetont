@extends('layouts.app')

@section('content')
</br>
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="pull-left">
                <h2>Cadastro de Clientes</h2>
                </br>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table id="tabelaClientes" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nº</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                            <th>Data de criação</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td scope="row">{{ $cliente->id }}</td>
                            <td scope="row">{{ $cliente->nome }}</td>
                            <td scope="row">{{ $cliente->cpf }}</td>
                            <td scope="row">{{ $cliente->telefone }}</td>
                            <td scope="row">{{ $cliente->endereco }}</td>
                            <td scope="row">{{ date_format($cliente->created_at, 'd-m-Y H:i:s') }}</td>
                            <td scope="row">
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
                    <tbody>
                </table>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('clientes.create') }}" title="Adicionar um Cliente"> <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#tabelaClientes').DataTable();
                    });
                </script>
            </div>
        </div>
    </div>
</div>
{!! $clientes->links() !!}
</script>
@endsection