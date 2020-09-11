<?php

use Illuminate\Database\Seeder;

class heureSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     factory(App\heure::class)->create();
     factory(App\heure::class)->create(['dure'=>'9h-10h']);
     factory(App\heure::class)->create(['dure'=>'10h-11h']);
     factory(App\heure::class)->create(['dure'=>'11h-12h']);
     factory(App\heure::class)->create(['dure'=>'13h-14h']);
     factory(App\heure::class)->create(['dure'=>'14h-15h']);
     factory(App\heure::class)->create(['dure'=>'15h-16h']);
     factory(App\heure::class)->create(['dure'=>'16h-17h']);
    }
}
