<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory, SoftDeletes;
    // use SoftDeletes;
    
    // protected $tabel = 'todos2';
    // protectecd $primaryKey = 'todosId';
    // public $timestamps = false;
    protected  $guarded = [];
    // protected $fillabe = ['nome', 'votos', "user_id"];
}
