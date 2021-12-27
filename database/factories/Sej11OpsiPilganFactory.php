<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\sej11_opsi_pilgan;

class Sej11OpsiPilganFactory extends Factory
{
    protected $model = sej11_opsi_pilgan::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sej11_soal_id' => mt_rand(1, 10),
            'opsi_pg'=> Str::random(10),
            'status_benar' => mt_rand(1, 10),
        ];
    }
}
