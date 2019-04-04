<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Dependente::class, function (Faker $faker) {
    return [
        'apto' => $faker->buildingNumber,
        'nome' => $faker->name,
        'cpf' => $faker->cpf,
        'rg' => $faker->rg,
        'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sexo' => $faker->randomElement($array = array('Feminino', 'Masculino', 'Outro')),
        'parentesco' => $faker->randomElement($array = array('Pai', 'Mãe', 'Irmã', 'Irmão', 'Primo', 'Prima', 'Sobrinho', 'Sobrinha', 'Tio', 'Tia', 'Avô', 'Avó', 'Cônjuge')),
    ];
});
