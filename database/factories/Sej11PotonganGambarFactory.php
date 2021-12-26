<?php

namespace Database\Factories;

use App\Models\sej11_potongan_gambar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Sej11PotonganGambarFactory extends Factory
{
    protected $model = sej11_potongan_gambar::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'potongan_gambar' => Str::random(10),
        ];
    }
}
