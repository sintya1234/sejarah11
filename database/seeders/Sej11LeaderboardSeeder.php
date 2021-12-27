<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sej11_Leaderboard;

class Sej11LeaderboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sej11_Leaderboard::factory()
        ->count(3)
        ->create();
    }
}
