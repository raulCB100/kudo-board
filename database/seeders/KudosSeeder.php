<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KudosSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('kudos')->insert([
            [
                'title' => 'Felicidades', 
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Birthday_candles.jpg',
                'description'=>'Espero la pases muy bien, ¡feliz cumpleaños!',
                'created_by' => 1,
                'board_id' => 1,
            ],
            [
                'title' => 'Felicidades',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Birthday_candles.jpg',
                'description'=>'Espero la pases muy bien, ¡feliz cumpleaños!',
                'created_by' => 1,
                'board_id' => 2
            ],
            [
                'title' =>  'Felicidades', 
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Birthday_candles.jpg',
                'description'=>'Espero la pases muy bien, ¡feliz cumpleaños!',
                'created_by' => 1,
                'board_id' => 3
            ],
            [
                'title' =>  'Proyecto', 
                'image' => 'https://thumbs.dreamstime.com/b/tablero-de-anuncios-en-oficina-creativa-con-amor-odio-mensajes-retroalimentaci%C3%B3n-208514215.jpg',
                'description'=>'Felicidades al equipo',
                'created_by' => 1,
                'board_id' => 2
            ],
            [
                'title' =>  'Proyecto', 
                'image' => 'https://thumbs.dreamstime.com/b/tablero-de-anuncios-en-oficina-creativa-con-amor-odio-mensajes-retroalimentaci%C3%B3n-208514215.jpg',
                'description'=>'Felicidades al equipo',
                'created_by' => 1,
                'board_id' => 2
            ],
            [
                'title' =>  'Proyecto', 
                'image' => 'https://thumbs.dreamstime.com/b/tablero-de-anuncios-en-oficina-creativa-con-amor-odio-mensajes-retroalimentaci%C3%B3n-208514215.jpg',
                'description'=>'Felicidades al equipo',
                'created_by' => 1,
                'board_id' => 2
            ],
            [
                'title' =>  'Anuncios', 
                'image' => 'https://thumbs.dreamstime.com/b/tablero-de-anuncios-en-oficina-creativa-con-amor-odio-mensajes-retroalimentaci%C3%B3n-208514215.jpg',
                'description'=>'Fiesta de fin de año',
                'created_by' => 1,
                'board_id' => 3
            ],
            [
                'title' =>  'Anuncios', 
                'image' => 'https://thumbs.dreamstime.com/b/tablero-de-anuncios-en-oficina-creativa-con-amor-odio-mensajes-retroalimentaci%C3%B3n-208514215.jpg',
                'description'=>'Empleado del mes',
                'created_by' => 1,
                'board_id' => 3
            ],
        ]); 
    }
}
