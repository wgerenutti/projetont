<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

    protected $table = 'pedidos';
    public $timestamps = true;

    protected $fillable = [
        'status',
        'clientes_id',
        'created_at'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id', 'clientes_id');
    }
    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'pedidos_produtos', 'pedidos_id', 'produtos_id');
    }
}
