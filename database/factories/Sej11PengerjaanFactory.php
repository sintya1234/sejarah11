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
            'user_id' => mt_rand(1, 10),
            'level_id' => mt_rand(1, 10),
            'soal_id' => mt_rand(1, 10),
            'potongan_gambar_id' => mt_rand(1, 10),
            'status_pengerjaan' => mt_rand(1, 10),
        ];
    }
}
