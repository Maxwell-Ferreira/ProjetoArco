<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert(['titulo' => 'Este é o novo caminhão da empresa!',
        'texto' => 'O novo caminhão é muito potente e aguenta muitos quilometros sem abastecer',
        'imagem' => 'noticias/QTI9VyN5ag8whDrWz3VlCFT21reCg68DGyKlFpyO.png']);
    }
}
