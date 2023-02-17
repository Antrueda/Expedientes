<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        ];

        public static function combo($padrexxx, $cabecera, $ajaxxxxx)
        {
            $comboxxx = [];
            if ($cabecera) {
                $comboxxx = ['' => 'Seleccione'];
            }
    
            $areaxxxx = Area::get();
            if ($padrexxx != '') {
                $areaxxxx = Area::where('id', $padrexxx)->first()->in_indicadors;
            }
    
    
            foreach ($areaxxxx as $registro) {
                if ($ajaxxxxx) {
                    $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => ($padrexxx == '') ? $registro->nombre : $registro->s_indicador];
                } else {
                    $comboxxx[$registro->id] = ($padrexxx == '') ? $registro->nombre : $registro->s_indicador;
                }
            }
    
            return $comboxxx;
        }
    
        public static function comb($cabecera, $ajaxxxxx)
        {
            $comboxxx = [];
            if ($cabecera) {
                $comboxxx = ['' => 'Seleccione'];
            }
            foreach (Area::get() as $registro) {
                if ($ajaxxxxx) {
                    $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
                } else {
                    $comboxxx[$registro->id] = $registro->nombre;
                }
            }
            return $comboxxx;
        }
    
    
        public static function transaccion($dataxxxx,  $objetoxx)
        {
            $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
                $dataxxxx['user_edita_id'] = Auth::user()->id;
                if ($objetoxx != '') {
                    $objetoxx->update($dataxxxx);
                } else {
                    $dataxxxx['user_crea_id'] = Auth::user()->id;
                    $objetoxx = Area::create($dataxxxx);
                }
                return $objetoxx;
            }, 5);
            return $usuariox;
        }
}
