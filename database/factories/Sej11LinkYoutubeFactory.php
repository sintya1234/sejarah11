<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Sej11_link_youtube;

class Sej11LinkYoutubeFactory extends Factory
{
    protected $model = Sej11_link_youtube::class;
    public $link = "https://youtube.be/";

    /**
     * Define the model's default state.
     *
     * @return array
     */
    

    public function definition()
    {
        return [
            'link_youtube' => $this->faker->sentence(mt_rand(2, 8)),
            'sej11__level_id' => mt_rand(1, 10),
        ];
    }
}
