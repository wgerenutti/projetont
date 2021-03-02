@extends('layouts.app')

@section('content')
</br>
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="pull-left">
                <h2>Cadastro de Produtos</h2></br>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table id="tabela" id="tabela" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nº</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Data de criação</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                        <tr>
                            <td scope="row">{{ $produto->id }}</td>
                            <td scope="row">{{ $produto->nome }}</td>
                            <td scope="row">{{ $produto->descricao }}</td>
                            <td scope="row">{{ $produto->preco }}</td>
                            <td scope="row">{{ $produto->quantidade }}</td>
                            <td scope="row">{{ date_format($produto->created_at, 'd-m-Y') }}</td>
                            <td>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                                    <a href="{{ route('produtos.show', $produto->id) }}" title="Visualizar">
                                        <i class="fas fa-eye text-success fa-lg"></i>
                                    </a>
                                    <a href="{{ route('produtos.edit', $produto->id) }}" title="Editar">
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
                    <a class="btn btn-success" href="{{ route('produtos.create') }}" title="Adicionar um produto"> <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{!! $produtos->links() !!}
<script>
    $(document).ready(function() {
        $('#tabela').DataTable({
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    });
</script>
@endsection