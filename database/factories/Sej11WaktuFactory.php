<?php

namespace Database\Factories;

use App\Models\sej11_waktu;
use Illuminate\Database\Eloquent\Factories\Factory;

class Sej11WaktuFactory extends Factory
{
    protected $model = sej11_waktu::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'waktu' => mt_rand(1, 10),
        ];
    }
}
