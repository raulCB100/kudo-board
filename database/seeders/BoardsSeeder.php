<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
            [
                'title' => 'Cumpleaños de Rubí', 
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Birthday_candles.jpg',
                'description'=>' Este Board fue creado para felicitar a Rubí en su cumpleaños',
                'created_by' => 1,
                'type_id' => 1,
        ],
            [
                'title' =>  'Proyecto tekton',
                'image' => 'https://media-exp1.licdn.com/dms/image/C4D0BAQFmMqOb_QYMaA/company-logo_200_200/0/1625491974525?e=2159024400&v=beta&t=ZZPMbJBF8yWGkR8aVThKyclx1TI5oWuRAuWj3NXx-H0',
                'description'=>' Aquí se muestran los logros de los compañeros que participan en el proyecto de tekton',
                'created_by' => 1,
                'type_id' => 2
        ],
            [
                'title' =>  'Anuncios', 
                'image' => 'https://thumbs.dreamstime.com/b/tablero-de-anuncios-en-oficina-creativa-con-amor-odio-mensajes-retroalimentaci%C3%B3n-208514215.jpg',
                'description'=>' Sientanse libres de usar este board para agregar cualquier anuncio.',
                'created_by' => 1,
                'type_id' => 3
        ],
        ]); 
    }
}
