<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'radicado',
        'user_id',
        'area_id',
        'esta_id',
        'create_at',
        'update_at',

        ];

        public function areas(){
            return $this->belongsTo(area::class, 'area_id');
        }
        public function estados(){
            return $this->belongsTo(Estado::class, 'esta_id');
        }


}
