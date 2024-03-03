<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    
    // protected $tabel = 'todos2';
    // protectecd $primaryKey = 'todosId';
    // public $timestamps = false;
    // protected  $guarded = [];
    protected $fillabe = [
        'nome', 
        'votos'
    ];
}
