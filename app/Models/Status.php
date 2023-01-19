<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Status extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $table = 'status';

    protected $fillable = [
        'name',
        'color',
    ];

    protected $auditExclude = [
        'published',
    ];

    protected $dates = ['created_at', 'updated_at'];


}
