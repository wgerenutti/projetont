@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md">
            <p class="text-center fs-1">Editar o pedido nº{{$pedido->id}}</b></p>
            <div class="float-left">
                <a class="btn btn-primary" href="{{ route('pedidos.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
            </div>
            </br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ops!</strong> Há um problema com seu Pedido<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="row h-100">
                <div class="col">
                    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="selectBox"> Cliente selecionado: </label>
                                <select style=width:400px name="clientes_id" class="form-control" onfocus="this.selectedIndex = -1;">
                                    @foreach ($pedido->clientes as $cliente)
                                    <option selected value="{{ $cliente->id}}">{{ $cliente->nome}}</option>
                                    @endforeach
                                    @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id}}">{{ $cliente->nome}}</option>
                                    @endforeach
                                </select>
                                </br>
                                <div class="custom-select">
                                    <label for="selectBox"> Status selecionado: </label>
                                    <select style=width:400px name="status" class="form-control" onfocus="this.selectedIndex = -1;">
                                        <option selected> {{ $pedido->status }}</option>
                                        <option value=aberto>Em aberto</option>
                                        <option value=pago>Pago</option>
                                        <option value=cancelado>Cancelado</option>
                                    </select>
                                </div>
                                </br>
                                <label for="selectBox"> Escolha um produto: </label>
                                <select style=width:400px class="form-control" name="produtos" id="selectBox" onfocus="this.selectedIndex = -1;" onchange="addProduct(options);">
                                    @foreach ($produtos as $produto)
                                    <option value="{{ $produto->id}}">{{ $produto->nome}}</option>
                                    @endforeach
                                </select>
                                </br></br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Código Produto</th>
                                            <th>Produto selecionado</th>
                                            <th>Remover</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @foreach ($produtos as $key => $produto)
                                        <tr>
                                            <td>
                                                <input type="hidden" name="produtos_id[{{$key}}]" value="{{ $produto->id}}">{{ $produto->id}}
                                            </td>
                                            <td>
                                                {{ $produto->nome}}
                                            </td>
                                            <td>
                                                <input type='button' value='Remover' onclick='removeProduct()' />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </br>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var table = document.getElementById('tbody');
    var count = linhas;

    function addProduct(product) {
        table.innerHTML += "<tr><td><input type='hidden' name='produtos_id[" + count + "]' value='" + product[product.selectedIndex].value + "'>" + product[product.selectedIndex].value + "</td><td>" + product[product.selectedIndex].innerText + "</td><td><input type='button' value='Remover' onclick='removeProduct()'/></tr></td>";
        count++;
    }

    function removeProduct() {
        var td = event.target.parentNode;
        var tr = td.parentNode;
        tr.parentNode.removeChild(tr);
        count--;
    }
</script>
@endsection