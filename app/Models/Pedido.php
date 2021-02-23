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

    public function getClientes()
    {
        return $this->hasMany(Cliete::class, 'clientes_id', 'id');
    }
}
