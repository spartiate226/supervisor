<?php

use Illuminate\Database\Seeder;

class profSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\professeur::class)->create(['matiere_id'=>1]);
        factory(\App\professeur::class)->create(['matiere_id'=>2]);
        factory(\App\professeur::class)->create(['matiere_id'=>3]);
        factory(\App\professeur::class)->create(['matiere_id'=>4]);
        factory(\App\professeur::class)->create(['matiere_id'=>5]);
        factory(\App\professeur::class)->create(['matiere_id'=>6]);
    }
}
