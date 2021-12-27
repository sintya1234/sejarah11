<?php

namespace Database\Factories;

use App\Models\sej11_user_level;
use Illuminate\Database\Eloquent\Factories\Factory;

class Sej11UserLevelFactory extends Factory
{
    protected $model = sej11_user_level::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sej11_user_level_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 3),
            'sej11_level_id' => mt_rand(1, 2),
            'waktu_pengerjaan' => mt_rand(1, 10),
            'score' => mt_rand(1, 100)
        ];
    }
}
