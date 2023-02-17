<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaUsuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        's_estado',
        'i_estado',
        'user_crea_id',
        'user_edita_id',];
}
