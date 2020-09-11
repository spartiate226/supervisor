<?php

use App\matiere;
use Illuminate\Database\Seeder;

class matiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(matiere::class)->create(['nom'=>'Chimie et biochimie']);
        factory(matiere::class)->create(['nom'=>'Biologie cellulaire']);
        factory(matiere::class)->create(['nom'=>'Physique et biophysique']);
        factory(matiere::class)->create(['nom'=>'Biomathematiques']);
        factory(matiere::class)->create(['nom'=>'Anatomie']);
        factory(matiere::class)->create(['nom'=>'physiologie et matiere specifique']);
    }
}
