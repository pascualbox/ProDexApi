<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\User::factory(10)->create();
        $this->call(
            UserSeeder::class
        );
        $this->call(
            TeamSeeder::class
        );
        $this->call([
            PokemonSeeder::class,
        ]);
    }
}
