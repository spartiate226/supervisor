<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(heureSeed::class);
        $this->call(jourSeeder::class);
        $this->call(matiereSeeder::class);
        $this->call(profSeeder::class);
        $this->call(niveauSeeder::class);
        $this->call(salleSeeder::class);
    }
}
