<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Clientes extends Model implements Auditable
{
    use HasFactory, SoftDeletes, \OwenIt\Auditing\Auditable;

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

    protected $auditExclude = [
        'published',
    ];

    protected $dates = ['deleted_at'];

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }

    public function produtos()
    {
        return $this->belongsToMany(Clientes::class, 'produtocliente', 'cliente_id','produto_id' );
    }

}
