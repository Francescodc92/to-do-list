<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'Francesco dc',
             'email' => 'fradc@hotmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Samuele stiva',
            'email' => 'super.samu.stiva@gmail.com',
       ]);


        $this->call([
            TaskSeeder::class,
        ]);
    }
}
