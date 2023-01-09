<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCliente extends Model
{
    use HasFactory;

    protected $table = 'produtocliente';

    protected $fillable = [
        'cliente_id',
        'produto_id',
    ];


}
