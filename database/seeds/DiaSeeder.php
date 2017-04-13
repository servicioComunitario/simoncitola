<?php

use Illuminate\Database\Seeder;

use App\Models\Dia;

class DiaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $datos = [
    	[
        'id'         => '2017-04-12',
        'periodo_id' => '1',
        'tipo'       => 'escolar'
    	]
    ];

    foreach ($datos as $dato) {
			Dia::create($dato);
    }
  }
}
