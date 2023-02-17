<?php

namespace Database\Seeders;

use App\Models\Estado;
use App\Models\Sistema\SisEsta;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create(["nombreestado"=>"En Archivo Despacho- Radicado a Ruego","i_estado"=>1,]);
        Estado::create(["nombreestado"=>"En Archivo Despacho a espera de Fotos Valla","i_estado"=>1]);
        Estado::create(["nombreestado"=>"En notificación a vecinos","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Revisión Área Arquitectura","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Revisión Área Ingenieria","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Revisión Área Jurídica","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Revisión Despacho Curador","i_estado"=>1]);
        Estado::create(["nombreestado"=>"En Archivo para ingreso documentos aportados","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Acta Observaciones expedida en tiempo de cumplimiento","i_estado"=>1]);
        Estado::create(["nombreestado"=>"En nueva revisión expediente para verificar cumplimiento observaciones ","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Acto Viable expedido pendiente por pago","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Pagos aportados en proceso Resolución","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Resolución notificada pendiente ejecutoria","i_estado"=>1]);
        Estado::create(["nombreestado"=>"En proceso sellado planos y memorias","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Acto ejecutoriado en firme","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Resolución de Archivo expedida","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Expediente Archivado por incumplir ruego","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Expendiente Archivado por no aportar fotos valla","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Expediente Archivado por no cumplir Acta Observaciones","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Solicitud de Licencia Negada","i_estado"=>1]);
        Estado::create(["nombreestado"=>"En resolución de recurso interpuesto","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Expediente en Contabilidad","i_estado"=>1]);
        Estado::create(["nombreestado"=>"Otro estado","i_estado"=>1]);


    }
}
