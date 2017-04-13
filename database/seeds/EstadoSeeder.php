<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
        	[
        		'nombre' => 'activo',
        	]
        ];

        foreach ($estados as $estado) {
			\App\Models\Estado::create($estado);        	
        }
    }
}