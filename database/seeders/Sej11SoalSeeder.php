<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sej11_soal;

class Sej11SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sej11_soal::factory()
        ->count(3)
        ->create();
    }
}
