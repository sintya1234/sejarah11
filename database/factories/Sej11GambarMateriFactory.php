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
            'gambar_materi' =>'https://img.inews.co.id/media/822/files/inews_new/2021/06/08/IMG_08062021_114613__822_x_430_piksel_.jpg',
        ];
    }
}
