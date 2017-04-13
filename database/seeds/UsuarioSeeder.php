<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
        	[
        		'email' 		=> 'Roiner123@gmail.com',
        		'password'		=> bcrypt('2882416'),
        		'rol_id' 		=> 1,
        		'empleado_id' 	=> 4,
        	]
        ];

        foreach ($usuarios as $usuario) {
			\App\Models\User::create($usuario);        	
        }
    }
}
