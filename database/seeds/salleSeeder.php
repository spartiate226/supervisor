<?php

use Illuminate\Database\Seeder;

class salleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\salle::class)->create();
        factory(\App\salle::class)->create(['salle'=>'Amphi B']);
        factory(\App\salle::class)->create(['salle'=>'Amphi C']);
        factory(\App\salle::class)->create(['salle'=>'Amphi D']);
        factory(\App\salle::class)->create(['salle'=>'Amphi E']);
        factory(\App\salle::class)->create(['salle'=>'Amphi F']);
        factory(\App\salle::class)->create(['salle'=>'Amphi G']);
        factory(\App\salle::class)->create(['salle'=>'Amphi J']);
    }
}
