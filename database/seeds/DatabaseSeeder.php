<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(EstadoCivilSeeder::class);
         $this->call(EstadoSeeder::class);
         $this->call(FreteSeeder::class);
         $this->call(SexoSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(NoticiaSeeder::class);
         $this->call(UsuarioSeeder::class);
    }
}
