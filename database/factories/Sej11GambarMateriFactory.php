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
            'gambar_materi' => Str::random(2),
        ];
    }
}
