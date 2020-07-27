<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert(['login' => 'admin', 'email' => 'projetoarcomaxwell@gmail.com', 'senha' => 'AdminAccess']);
    }
}
