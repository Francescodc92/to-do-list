<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::truncate();

        for ($i=0; $i < 20; $i++) {
            $rendomUser = User::inRandomOrder()->first();
            Task::create([
                'user_id'=> $rendomUser->id,
                'title'=> substr(fake()->sentence(3),0,100),
                'description'=> fake()->paragraph(),
                'completed'=> fake()->boolean(),
                'expiration_date' => fake()->dateTime('+3 weeks')
            ]);

        }
    }
}
