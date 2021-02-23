<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    protected $table = 'clientes';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'endereco',
        'created_at'
    ];

    public function Pedidos()
    {
        return $this->belongsTo(Pedido::class, 'clientes_id');
    }
}
