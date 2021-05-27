<?php

namespace Database\Seeders;

use App\Models\Publication;
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
        \App\Models\User::factory(5)->create()->each(
            function ($user) {
                return $user->publications()->saveMany(Publication::factory(5)->make());
            }
        );
    }
}
