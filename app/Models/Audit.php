<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $table = 'audits';
    protected $hidden = ['id', 'updated_at', 'created_at'];
    protected $fillable = ['user_type', 'user_id', 'event', 'auditable_type', 'old_values', 'url', 'ip_address', 'user_agent', 'tags'];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
