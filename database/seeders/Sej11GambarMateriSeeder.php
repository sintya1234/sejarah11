<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sej11_gambar_materi;

class Sej11GambarMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sej11_gambar_materi::factory()
        ->count(3)
        ->create();
    }
}
