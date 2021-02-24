<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    public $timestamps = true;

    protected $casts = [
        'preco' => 'float'
    ];

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'created_at'
    ];
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedidos_produtos');
    }
}
