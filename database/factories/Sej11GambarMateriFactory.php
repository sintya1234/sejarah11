<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Sej11_gambar_materi;

class Sej11GambarMateriFactory extends Factory
{
    protected $model = Sej11_gambar_materi::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sej11__level_id' => mt_rand(1, 10),
            'gambar_materi' =>$this->faker->sentence(mt_rand(2, 8)),
        ];
    }
}
