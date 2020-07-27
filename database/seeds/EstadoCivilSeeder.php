<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados_civis')->insert(['estado_civil' => 'Casado(a)']);
        DB::table('estados_civis')->insert(['estado_civil' => 'Divorciado(a)']);
        DB::table('estados_civis')->insert(['estado_civil' => 'Separado(a)']);
        DB::table('estados_civis')->insert(['estado_civil' => 'Solteiro(a)']);
        DB::table('estados_civis')->insert(['estado_civil' => 'Amigado(a)']);
        DB::table('estados_civis')->insert(['estado_civil' => 'Viúvo(a)']);
    }
}
