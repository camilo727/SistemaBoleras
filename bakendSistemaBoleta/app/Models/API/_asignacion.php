<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _asignacion extends Model
{
    use HasFactory;
    public function clientes()
    {
        return $this->belongsToMany(User::class,'_asignacion');
    }
}
