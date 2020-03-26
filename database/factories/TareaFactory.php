<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Tarea;
use Faker\Generator as Faker;

$factory->define(Tarea::class, function (Faker $faker) {
    return [
        'nombre_tarea' => $faker->word,
        'descripcion' => $faker->text($maxNbChars = 200),
        'codigo_tarea' => $faker-> numerify('PDPS-###'),
        'servidor' => $faker -> randomFloat($nbMaxDecimals = 6, $min = 3, $max = 3),
        'estado' => 'nueva',
        'proyecto_id' => function(){
            return factory(App\Models\Proyecto::class)->create()->id_proyecto;
        },
        'material_id' => function(){
            return factory(App\Models\Material::class)->create()->id_material;
        }
    ];
});
