<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [

        'nombre_proyecto' => $faker->word,
        'version' => $faker->randomDigit,
        'descripcion' => $faker->text($maxNbChars = 200),
        'usuario_id' => function(){
            return factory(App\Models\User::class)->create()->id;
        }
        
    ];
});
