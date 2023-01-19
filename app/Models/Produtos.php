<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
class Produtos extends Model implements Auditable
{
    use HasFactory, SoftDeletes, \OwenIt\Auditing\Auditable;

    protected $table = 'produtos';

    protected $fillable = [
        'name',
        'valor'
    ];

    protected $auditExclude = [
        'published',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
