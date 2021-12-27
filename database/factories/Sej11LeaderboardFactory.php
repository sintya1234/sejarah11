<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Sej11_Leaderboard;

class Sej11LeaderboardFactory extends Factory
{
    protected $model = Sej11_Leaderboard::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'peringkat' => mt_rand(1, 10),
            'total_skor' => mt_rand(1, 10),
            'total_waktu_pengerjaan' => mt_rand(1, 10),
        ];
    }
}
