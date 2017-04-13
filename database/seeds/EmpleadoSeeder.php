<?php

use Illuminate\Database\Seeder;
use App\Models\Rol;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleados = [
        	[
        		'cargo_id' 					=> 1,
        		'estado_id'					=> 1,
        		'nombre' 					=> 'Roiner',
        		'nombre2' 					=> 'Leonardo',
        		'apellido' 					=> 'Hernandez',
        		'apellido2' 				=> 'Ramos',
        		'cedula' 					=> '21250667',
        		'fecha_nacimiento' 			=> '1994-05-15',
        		'direccion' 				=> 'Unare 2',
        		'telefono' 					=> '04148589600',
        		'telefono2' 				=> '02869514331',
        		'fecha_inicio_institucion' 	=> '2016-01-10',
        		'anios_servicio_nacional' 	=> 3,
        		'anios_servicio_estadal' 	=> 3,
        		'anios_servicio_municipal' 	=> 3,
        		'anios_servicio_otros' 		=> 3,
        		'titulo' 					=> 'ingeniero',
        		'especialidad' 				=> 'ninguna',
        		'codigo' 					=> '12345',
        		'funcion_id' 				=> 1,
        		'centro_operativo_labora' 	=> 'el que sea',
        		'numero_horas' 				=> 8,
        		'nivel_educativo_atiende'	=> 'no se',
        		'sueldo_mensual' 			=> 1000000,
        		'turno' 					=> 'mañana',
        		'estudia_actualmente' 		=> 1,
        		'descripcion_estudio' 		=> 'que ladilla',
        		'observacion' 				=> 'ya me estoy arrechando con este seeder',
        		'copia_ultimo_recibo' 		=> 1,
        		'copia_cedula' 				=> 1,
        	]
        ];

        foreach ($empleados as $empleado) {
			\App\Models\Empleado::create($empleado);        	
        }

    }
}
