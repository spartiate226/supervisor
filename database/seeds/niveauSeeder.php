<?php

use Illuminate\Database\Seeder;

class niveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\niveau::class)->create();
        factory(\App\niveau::class)->create(['niveau'=>'deuxieme annee']);
        factory(\App\niveau::class)->create(['niveau'=>' troisieme annee']);
        factory(\App\niveau::class)->create(['niveau'=>' quatrieme annee']);
        factory(\App\niveau::class)->create(['niveau'=>' cinquieme annee']);
        factory(\App\niveau::class)->create(['niveau'=>' sixieme annee']);
    }
}
