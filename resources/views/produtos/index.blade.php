@extends('layouts.app')

@section('content')
</br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastro de Produtos</h2>
            </div>
           
        </div>
        </br>
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
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data de criação</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>{{ date_format($produto->created_at, 'd-m-Y') }}</td>
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
    </table>
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produtos.create') }}" title="Adicionar um produto"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>

    {!! $produtos->links() !!}

@endsection
