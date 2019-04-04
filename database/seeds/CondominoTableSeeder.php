<?php

use Illuminate\Database\Seeder;
use App\Models\Condomino;
use App\Models\Dependente;

class CondominoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Condomino::class, 5)->create()->each(function($condomino) {
            $condomino->dependente()->save(factory(Dependente::class)->make());
        });
    }
}
