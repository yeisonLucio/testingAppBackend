<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Proyecto;
use App\Models\Material;
use App\Models\Tarea;
use App\Models\Test;
use App\Models\Escenario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class,2)->create();
        //factory(Proyecto::class,5)->create();
        factory(Tarea::class,10)->create();
        //factory(Material::class)->create();
        //factory(Test::class,5)->create();
        //factory(Escenario::class,5)->create();

    }
}
