<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::disableQueryLog();
        DB::unprepared(file_get_contents('database\sqlinsert\cidadesinsert.sql'));
        
    }
}
