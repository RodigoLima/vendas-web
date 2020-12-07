<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(ProfissaoSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(CidadeSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(VendedorSeeder::class);
        $this->call(VendaSeeder::class);

    }
}
