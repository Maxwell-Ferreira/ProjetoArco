<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert(['estado' => 'Acre', 'sigla' => 'AC']);
        DB::table('estados')->insert(['estado' => 'Alagoas', 'sigla' => 'AL']);
        DB::table('estados')->insert(['estado' => 'Amapá', 'sigla' => 'AP']);
        DB::table('estados')->insert(['estado' => 'Amazonas', 'sigla' => 'AM']);
        DB::table('estados')->insert(['estado' => 'Bahia', 'sigla' => 'BA']);
        DB::table('estados')->insert(['estado' => 'Ceará', 'sigla' => 'CE']);
        DB::table('estados')->insert(['estado' => 'Espírito Santo', 'sigla' => 'ES']);
        DB::table('estados')->insert(['estado' => 'Goiás', 'sigla' => 'GO']);
        DB::table('estados')->insert(['estado' => 'Maranhão', 'sigla' => 'MA']);
        DB::table('estados')->insert(['estado' => 'Mato Grosso', 'sigla' => 'MT']);
        DB::table('estados')->insert(['estado' => 'Mato Grosso do Sul', 'sigla' => 'MS']);
        DB::table('estados')->insert(['estado' => 'Minas Gerais', 'sigla' => 'MG']);
        DB::table('estados')->insert(['estado' => 'Pará', 'sigla' => 'PA']);
        DB::table('estados')->insert(['estado' => 'Paraíba', 'sigla' => 'PB']);
        DB::table('estados')->insert(['estado' => 'Paraná', 'sigla' => 'PR']);
        DB::table('estados')->insert(['estado' => 'Pernambuco', 'sigla' => 'PE']);
        DB::table('estados')->insert(['estado' => 'Piauí', 'sigla' => 'PI']);
        DB::table('estados')->insert(['estado' => 'Rio de Janeiro', 'sigla' => 'RJ']);
        DB::table('estados')->insert(['estado' => 'Rio Grande do Norte', 'sigla' => 'RN']);
        DB::table('estados')->insert(['estado' => 'Rio Grande do Sul', 'sigla' => 'RS']);
        DB::table('estados')->insert(['estado' => 'Rondônia', 'sigla' => 'RO']);
        DB::table('estados')->insert(['estado' => 'Roraima', 'sigla' => 'RR']);
        DB::table('estados')->insert(['estado' => 'Santa Catarina', 'sigla' => 'SC']);
        DB::table('estados')->insert(['estado' => 'São Paulo', 'sigla' => 'SP']);
        DB::table('estados')->insert(['estado' => 'Sergipe', 'sigla' => 'SE']);
        DB::table('estados')->insert(['estado' => 'Tocantins', 'sigla' => 'TO']);
        DB::table('estados')->insert(['estado' => 'Distrito Federal', 'sigla' => 'DF']);
    }
}
