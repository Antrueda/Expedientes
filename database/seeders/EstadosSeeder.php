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
        Estado::create(["nombre"=>"En Archivo Despacho- Radicado a Ruego",]);
        Estado::create(["nombre"=>"En Archivo Despacho a espera de Fotos Valla",]);
        Estado::create(["nombre"=>"En notificación a vecinos",]);
        Estado::create(["nombre"=>"Revisión Área Arquitectura",]);
        Estado::create(["nombre"=>"Revisión Área Ingenieria",]);
        Estado::create(["nombre"=>"Revisión Área Jurídica",]);
        Estado::create(["nombre"=>"Revisión Despacho Curador",]);
        Estado::create(["nombre"=>"En Archivo para ingreso documentos aportados",]);
        Estado::create(["nombre"=>"Acta Observaciones expedida en tiempo de cumplimiento",]);
        Estado::create(["nombre"=>"En nueva revisión expediente para verificar cumplimiento observaciones ",]);
        Estado::create(["nombre"=>"Acto Viable expedido pendiente por pago",]);
        Estado::create(["nombre"=>"Pagos aportados en proceso Resolución",]);
        Estado::create(["nombre"=>"Resolución notificada pendiente ejecutoria",]);
        Estado::create(["nombre"=>"En proceso sellado planos y memorias",]);
        Estado::create(["nombre"=>"Acto ejecutoriado en firme",]);
        Estado::create(["nombre"=>"Resolución de Archivo expedida",]);
        Estado::create(["nombre"=>"Expediente Archivado por incumplir ruego",]);
        Estado::create(["nombre"=>"Expendiente Archivado por no aportar fotos valla",]);
        Estado::create(["nombre"=>"Expediente Archivado por no cumplir Acta Observaciones",]);
        Estado::create(["nombre"=>"Solicitud de Licencia Negada",]);
        Estado::create(["nombre"=>"En resolución de recurso interpuesto",]);
        Estado::create(["nombre"=>"Expediente en Contabilidad",]);
        Estado::create(["nombre"=>"Otro estado",]);


    }
}
