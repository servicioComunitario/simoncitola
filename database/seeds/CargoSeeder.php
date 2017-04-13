<?php

use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargos = [
        	[
        		'nombre' 	=> 'admin',
        		'nivel'		=> '0'
        	]
        ];

        foreach ($cargos as $cargo) {
			\App\Models\Cargo::create($cargo);        	
        }
    }
}
