<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FreteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fretes')->insert(['tipo_frete' => 'Pago']);
        DB::table('fretes')->insert(['tipo_frete' => 'A Pagar']);
    }
}
