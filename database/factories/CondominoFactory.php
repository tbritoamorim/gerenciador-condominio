<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(\App\Models\Condomino::class, function (Faker $faker) {
    return [
        'apto' => $faker->buildingNumber,
        'nome' => $faker->name,
        'email' => $faker->safeEmail,
        'cpf' => $faker->cpf,
        'rg' => $faker->rg,
        'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sexo' => $faker->randomElement($array = array('Feminino', 'Masculino', 'Outro')),
        'telefone_fixo' =>  $faker->landline,
        'celular' => $faker->cellphone,
        'vaga_apto' => $faker->buildingNumber,
    ];
});
