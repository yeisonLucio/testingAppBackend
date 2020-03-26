<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Escenario;
use Faker\Generator as Faker;

$factory->define(Escenario::class, function (Faker $faker) {
    return [
     'titulo' => $faker->text($maxNbChars = 50),
     'resultado_actual' => $faker->text($maxNbChars = 100),
     'resultado_previsto' => $faker->text($maxNbChars = 100),
     'pasos_para_reproducir' => $faker->text($maxNbChars = 100),
     'severidad_error' => $faker->randomElement($array = array ('critico','usuabilidad','leve','medio')),
     'nota_adicional' => $faker->text($maxNbChars = 200),
     'estado' => $faker->randomElement($array = array ('Pendiente','En proceso','Terminado')),
     'material_id' => function(){
        return factory(App\Models\Material::class)->create()->id_material;
    },
    'test_id' => function(){
        return factory(App\Models\Test::class)->create()->id_test;
    }
    ];
});
