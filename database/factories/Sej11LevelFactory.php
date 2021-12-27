<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Sej11_Level;

class Sej11LevelFactory extends Factory
{
    protected $model = Sej11_Level::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sej11_link_youtube_id' => mt_rand(1, 10),
            'gambar_utuh' => Str::random(11),
            'judul_sub_bab' => Str::random(2),
            'materi' => Str::random(11),
        ];
    }
}
