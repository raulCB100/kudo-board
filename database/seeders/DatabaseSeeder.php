<?php

namespace Database\Seeders;

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
        $this->call(TypesSeeder::class);
        $this->call(BoardsSeeder::class);
        $this->call(KudosSeeder::class);
        $this->call(DetailsSeeder::class);
        
    }
}
