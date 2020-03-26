<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Material;
use Faker\Generator as Faker;

$factory->define(Material::class, function (Faker $faker) {
    return [
        'ruta'=>"\pdfPrueba.pdf",
        'tipo'=>"pdf"
    ];
});
