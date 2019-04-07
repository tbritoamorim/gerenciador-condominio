<?php

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
        $this->call(CondominoTableSeeder::class);
        $this->call(DependenteTableSeeder::class);
        $this->call(ReservaTableSeeder::class);
        $this->call(VisitanteTableSeeder::class);
    }
}
