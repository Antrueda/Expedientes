<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'nombre',
        ];

public static function combo($cabecera, $ajaxxxxx)
        {
            $comboxxx = [];
            if ($cabecera) {
                if ($ajaxxxxx) {
                    $comboxxx[] = [
                        'valuexxx' => '',
                        'optionxx' => 'Seleccione'
                    ];
                } else {
                    $comboxxx = [
                        '' => 'Seleccione'
                    ];
                }
            }
            $parametr = Estado::select(['id as valuexxx', 'nombre as optionxx'])
                ->orderBy('nombre', 'asc')
                ->get();
            foreach ($parametr as $registro) {
                if ($ajaxxxxx) {
                    $comboxxx[] = [
                        'valuexxx' => $registro->valuexxx,
                        'optionxx' => $registro->optionxx
                    ];
                } else {
                    $comboxxx[$registro->valuexxx] = $registro->optionxx;
                }
            }
            return $comboxxx;
        }
}
