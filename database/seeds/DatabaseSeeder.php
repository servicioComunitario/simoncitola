<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RolSeeder::class);
         $this->call(CargoSeeder::class);
         $this->call(EstadoSeeder::class);
         $this->call(EmpleadoSeeder::class);
         $this->call(UsuarioSeeder::class);
    }
}
