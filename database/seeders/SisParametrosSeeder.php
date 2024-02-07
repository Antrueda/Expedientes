<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametro;
use App\Models\User;

class SisParametrosSeeder extends Seeder
{

    public function getR($dataxxxx)
    {
        Parametro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => "{$dataxxxx['nombrexx']}"]);
    }
    /**
     * Run the database seeds.
     * Listado de parámetros del sistema
     * @return void
     */
    public function run()
    {
         $registro = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => ''];
         Parametro::create(['id' => 5, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CÉDULA DE CIUDADANÍA']);
         Parametro::create(['id' => 6, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'NIT']);
         Parametro::create(['id' => 7, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'T.I.']);
         Parametro::create(['id' => 8, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CÉDULA DE EXTRANJERÍA.']);
         Parametro::create(['id' => 9, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'NO APLICA (N.A)']);
         Parametro::create(['id' => 10, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'NÚMERO DE IDENTIFICACIÓN DE EXTRANJERO']);
         Parametro::create(['id' => 11, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'NÚMERO IDENTIFICACIÓN SOCIEDAD EXTRANJERA']);
         Parametro::create(['id' => 12, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PASAPORTE']);
         Parametro::create(['id' => 13, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PERMISO ESPECIAL DE PERMANENCIA']);
         Parametro::create(['id' => 14, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PERMISO POR PROTECCIÓN TEMPORAL']);
         Parametro::create(['id' => 15, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'REGISTRO CIVIL']);
         Parametro::create(['id' => 16, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TARJETA DE IDENTIDAD']);
         Parametro::create(['id' => 18, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MENSAJE']);
         Parametro::create(['id' => 19, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TRATAMIENTO DE DATOS']);
         Parametro::create(['id' => 20, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'BIENVENIDA']);
         Parametro::create(['id' => 21, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'SALARIO']);
         Parametro::create(['id' => 22, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CIERRE TEMPORAL']);
         Parametro::create(['id' => 23, 'nombre' => 'HOMBRE', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 24, 'nombre' => 'MUJER', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 25, 'nombre' => 'INTERSEXUAL', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 26, 'nombre' => 'FEMENINO', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 27, 'nombre' => 'MASCULINO', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 28, 'nombre' => 'TRANSGENERO', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 29, 'nombre' => 'NO DESEO INFORMAR', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 30, 'nombre' => 'HETEROSEXUAL', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 31, 'nombre' => 'BISEXUAL', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
         Parametro::create(['id' => 32, 'nombre' => 'HOMOSEXUAL', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 


        //Usos
        Parametro::create(['id' => 33, 'nombre' => 'VIVIENDA', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
        Parametro::create(['id' => 34, 'nombre' => 'COMERCIO Y/O SERVICIOS', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
        Parametro::create(['id' => 35, 'nombre' => 'INSTITUCIONAL/DOTACIONAL', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
        Parametro::create(['id' => 36, 'nombre' => 'INDUSTRIAL', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 
        Parametro::create(['id' => 37, 'nombre' => 'OTRO, ¿CUAL? ', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); 



        //Area Unidades
         Parametro::create(['id' => 38, 'nombre' => 'MENOR A 2.000 M2', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 834
         Parametro::create(['id' => 39, 'nombre' => 'IGUAL O MAYOR A 2.000 m2', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 835
         Parametro::create(['id' => 40, 'nombre' => 'ALCANZA O SUPERA MEDIANTE AMPLIACIONES LOS 2.000 M2', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 836
         Parametro::create(['id' => 41, 'nombre' => 'GENERA 5 o MAS UNIDADES DE VIVIENDA PARA TRANSFERIR A TERCEROS', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 837

        //Tipo de vivienda
         Parametro::create(['id' => 42, 'nombre' => 'VIP', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838
         Parametro::create(['id' => 43, 'nombre' => 'VIS', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838
         Parametro::create(['id' => 44, 'nombre' => 'NO VIS', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838

         //SI O NO
         Parametro::create(['id' => 45, 'nombre' => 'SI', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838
         Parametro::create(['id' => 46, 'nombre' => 'NO', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838
        // Parametro::create(['id' => 47, 'nombre' => 'JUVENTUD (14 - 26 AÑOS)', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838
        // Parametro::create(['id' => 48, 'nombre' => 'ADULTEZ (27- 59 AÑOS)', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838
        // Parametro::create(['id' => 49, 'nombre' => 'PERSONA MAYOR (60 AÑOS O MAS) ENVEJECIMIENTO Y VEJEZ', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838
        // Parametro::create(['id' => 50, 'nombre' => 'SUSPENDIDO', 'user_crea_id' => '1', 'user_edita_id' => '1', 'sis_esta_id' => '1', ]); // 838



        //  Parametro::create(['id' => 21, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONTRATO O DOCUMENTO DONDE SE ACORDÓ LA ADMINISTRACIÓN O DONDE CONSTE LA COMUNIDAD DE UN BIEN']);
        //  Parametro::create(['id' => 22, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FORMULARIO DE SOLICITUD DE CONCILIACIÓN DEBIDAMENTE DILIGENCIADO Y FIRMADO']);
        //  Parametro::create(['id' => 23, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FOTOCOPIA CÉDULA DE CIUDADANÍA DEL SOLICITANTE']);
        //  Parametro::create(['id' => 24, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'LOS DOCUMENTOS RELACIONADOS CON LA SOLICITUD']);
        //  Parametro::create(['id' => 25, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COPIA DE REGISTRO CIVIL DE NACIMIENTO DE LOS MENORES']);


        //  //Arrendamiento
        //  Parametro::create(['id' => 25, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COPIA DE REGISTRO CIVIL DE NACIMIENTO DE LOS MENORES']);
        //  Parametro::create(['id' => 25, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COPIA DE REGISTRO CIVIL DE NACIMIENTO DE LOS MENORES']);
        //  Parametro::create(['id' => 25, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COPIA DE REGISTRO CIVIL DE NACIMIENTO DE LOS MENORES']);
        //  Parametro::create(['id' => 25, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COPIA DE REGISTRO CIVIL DE NACIMIENTO DE LOS MENORES']);
        


        // //ESCOLAR
        // $this->getR(['nombrexx' => 'LOS DOCUMENTOS RELACIONADOS CON LA SOLICITUD']); //26

        // //FAMILIA
        // $this->getR(['nombrexx' => 'COPIA DE REGISTRO CIVIL DE NACIMIENTO DE LOS MENORES']); //27
        

        

    
    }
}

