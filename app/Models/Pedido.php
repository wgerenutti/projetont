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

    public function getCliente(){
        return $this->hasMany(Cliete::class);
    }
}
