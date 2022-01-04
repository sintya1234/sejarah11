<?php

namespace Database\Factories;

use App\Models\sej11_pengerjaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class Sej11PengerjaanFactory extends Factory
{
    protected $model = sej11_pengerjaan::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sej11_user_level_id' => mt_rand(1, 10),
            'sej11_soal_id' => mt_rand(1, 10),
            'status_pengerjaan' => mt_rand(1, 10),
        ];
    }
}
