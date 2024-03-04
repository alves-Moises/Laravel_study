<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function relatedItems()
    {

        return $this->hasMany(PedidoItems::class, 'pedido_id', 'id');
        
    }
}
