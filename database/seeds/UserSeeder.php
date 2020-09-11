<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create(['pseudo'=>'admin','role'=>1]);
        factory(App\User::class,5)->create(['niveau_id'=>2]);
    }
}
