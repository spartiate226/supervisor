<?php

use App\jour;
use Illuminate\Database\Seeder;

class jourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(jour::class)->create();
        factory(jour::class)->create(["nom"=>"Mardi"]);
        factory(jour::class)->create(["nom"=>"Mercredi"]);
        factory(jour::class)->create(["nom"=>"Jeudi"]);
        factory(jour::class)->create(["nom"=>"Vendredi"]);
        factory(jour::class)->create(["nom"=>"Samedi"]);
    }
}
