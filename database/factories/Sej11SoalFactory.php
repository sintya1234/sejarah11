<?php

namespace Database\Factories;

use App\Models\sej11_soal;
use Illuminate\Database\Eloquent\Factories\Factory;

class Sej11SoalFactory extends Factory
{
    protected $model = sej11_soal::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sej11__level_id' => mt_rand(1, 10),
            'sej11_waktu_id' => mt_rand(1, 10),
            'gambar_materi_id'=> mt_rand(1, 10),
            'jenis_soal'=> mt_rand(1, 3),
        ];
    }
}
