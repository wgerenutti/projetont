<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

    protected $table = 'pedidos';
    public $timestamps = true;

    protected $fillable = [
        'status',
        'created_at'
    ];

    public function Clientes()
    {
        return $this->hasMany(Cliente::class, 'clientes_id', 'id');
    }
}
