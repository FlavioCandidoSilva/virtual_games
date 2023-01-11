<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Clientes extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'email',
        'description',
        'endereco',
        'cpf',
        'telefone',
        'dataEntrega',
        'status_id'

    ];

    protected $dates = ['deleted_at'];

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }

    public function produtos()
    {
        return $this->belongsToMany(Clientes::class, 'produtocliente', 'cliente_id', 'produto_id');
    }

}
