<?php


namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(["nombre"=>"Despacho Curador"]);
        Area::create(["nombre"=>"Arquitectura"]);
        Area::create(["nombre"=>"Ingeniería"]);
        Area::create(["nombre"=>"Jurídica"]);
        Area::create(["nombre"=>"Area Liquidaciones y actos"]);
        Area::create(["nombre"=>"Contabilidad"]);
        Area::create(["nombre"=>"Profesional Apoyo Gestión"]);
        Area::create(["nombre"=>"Profesional Administrativo Despacho"]);
        Area::create(["nombre"=>"Profesional Control Procesos"]);
        Area::create(["nombre"=>"Archivo Despacho"]);
        Area::create(["nombre"=>"Archivo Central"]);
        Area::create(["nombre"=>"Auxiliar Administrativo 1"]);


    }
}
