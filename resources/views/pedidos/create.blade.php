@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md ">
            <div class="pull-left">
                <p class="text-center fs-1">Cadastrar novo Pedido</p>
                <div class="float-left">
                    <a class="btn btn-primary" href="{{ route('pedidos.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
                </div></br>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Há um problema com seu pedido<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row h-100">
                    <div class="col">
                        <form action="{{ route('pedidos.store') }}" method="POST">
                            @csrf
                            <div class="custom-select">
                                <select style=width:400px name="clientes_id" class="form-control">
                                    <option selected>-- Selecione o Cliente --</option>
                                    @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id}}">{{ $cliente->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </br>
                            <div class="custom-select">
                                <select style=width:400px name="status" class="form-control">
                                    <option selected>-- Selecione o Status --</option>
                                    <option value=aberto>Em aberto</option>
                                    <option value=pago>Pago</option>
                                    <option value=cancelado>Cancelado</option>
                                </select>
                            </div>
                            </br>
                            <label for="selectBox"> Escolha um produto </label>
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
                                </tbody>
                            </table>
                            </br>
                            <div class="col-xs-12 col-sm-12 col-md-7 text-center">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var table = document.getElementById('tbody');
    var count = 0;

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