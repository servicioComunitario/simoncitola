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
                'id'          => '2017-04-10',
                'dia'         => 10,
                'mes'         => 4,
                'anio'        => 2017,
                'semana_mes'  => 3,
                'semana_anio' => 16,
                'fin_semana'  => 0,
                'dia_semana'  => 1,
                'tipo'        => 'escolar'
            ],
            [
                'id'          => '2017-04-11',
                'dia'         => 11,
                'mes'         => 4,
                'anio'        => 2017,
                'semana_mes'  => 3,
                'semana_anio' => 16,
                'fin_semana'  => 0,
                'dia_semana'  => 2,
                'tipo'        => 'libre'
            ],
            [
                'id'          => '2017-04-12',
                'dia'         => 12,
                'mes'         => 4,
                'anio'        => 2017,
                'semana_mes'  => 3,
                'semana_anio' => 16,
                'fin_semana'  => 0,
                'dia_semana'  => 3,
                'tipo'        => 'escolar'
            ],
            [
                'id'          => '2017-04-13',
                'dia'         => 13,
                'mes'         => 4,
                'anio'        => 2017,
                'semana_mes'  => 3,
                'semana_anio' => 16,
                'fin_semana'  => 0,
                'dia_semana'  => 4,
                'tipo'        => 'administrativo'
            ],
            [
                'id'          => '2017-04-14',
                'dia'         => 14,
                'mes'         => 4,
                'anio'        => 2017,
                'semana_mes'  => 3,
                'semana_anio' => 16,
                'fin_semana'  => 0,
                'dia_semana'  => 5,
                'tipo'        => 'administrativo'
            ],
            [
                'id'          => '2017-04-15',
                'dia'         => 15,
                'mes'         => 4,
                'anio'        => 2017,
                'semana_mes'  => 3,
                'semana_anio' => 16,
                'fin_semana'  => 1,
                'dia_semana'  => 6,
                'tipo'        => 'libre'
            ],
            [
                'id'          => '2017-04-16',
                'dia'         => 16,
                'mes'         => 4,
                'anio'        => 2017,
                'semana_mes'  => 3,
                'semana_anio' => 16,
                'fin_semana'  => 1,
                'dia_semana'  => 7,
                'tipo'        => 'libre'
            ]
        ];

        foreach ($datos as $dato) {
            Dia::create($dato);
        }
    }
}
