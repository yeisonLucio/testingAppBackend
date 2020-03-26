<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'nombre_test' => $faker->text($maxNbChars = 50),
        'estado' => $faker->randomElement($array = array ('Pendiente','En proceso','Terminado')),
        'usuario_id' => function(){
            return factory(App\Models\User::class)->create()->id;
        },
        'historia_id' => function(){
            return factory(App\Models\Historia::class)->create()->id_historia;
        },
        'material_id' => function(){
            return factory(App\Models\Material::class)->create()->id_material;
        }

    ];
});
