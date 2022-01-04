<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\sej11_opsi_isian;

class Sej11OpsiIsianFactory extends Factory
{
    protected $model = sej11_opsi_isian::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sej11_soal_id' => mt_rand(1, 10),
            'jawaban_benar' => Str::random(10),
        ];
    }
}
