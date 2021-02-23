<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;

class PedidosController extends Controller
{
     /**
     * mostrar conteudo no index
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::latest()->paginate(5);

        return view('pedidos.index', compact('pedidos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Mostra o form para criar um novo pedido.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * armazena um novo pedido pra enviar ao BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'quantidade' => 'required'
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido cadastrado com sucesso');
    }

    /**
     * Exibe um pedido
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    /**
     * Exibe um pedido para edição
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }
    /**
     * Atualiza um pedido no BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'status' => 'required',
        ]);
        $pedido->update($request->all());

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido atualizado com sucesso');
    }
    /**
     * Remove um pedido do BD
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index')
            ->with('success', 'Pedido deletado com sucesso');
    }
}