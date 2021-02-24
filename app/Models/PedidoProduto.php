<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    public $table = 'pedidos_produtos';

    protected $fillable = [
        'pedidos_id', 'produtos_id'
    ];
}
