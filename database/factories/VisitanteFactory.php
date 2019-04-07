<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Visitante::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cpf' => $faker->cpf,
        'rg' => $faker->rg,
        'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sexo' => $faker->randomElement($array = array('Feminino', 'Masculino', 'Outro')),
    ];
});
