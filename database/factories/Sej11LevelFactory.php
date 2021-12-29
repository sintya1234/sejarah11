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
            'gambar_utuh' => 'https://kompaspedia.kompas.id/wp-content/uploads/2021/04/89005p.jpg',
            'judul_sub_bab' => $this->faker->sentence(mt_rand(2, 8)),
            'materi' =>collect($this->faker->paragraphs(mt_rand(5, 10)))
            ->map(function ($parag) {
                return "<p>$parag</p>";
            })->implode(''),
        ];

    }
}
