<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Reserva::class, function (Faker $faker) {
    return [
        'local' => $faker->randomElement($array = array('Churrasqueira', 'Salão de Festa')),
        'data_hora' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
