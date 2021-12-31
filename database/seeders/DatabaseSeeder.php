<?php

namespace Database\Seeders;

use App\Models\Sej11_Level;
use App\Models\Sej11_link_youtube;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'sintya tri wahyu adityawati',
            'email' => 'sintya.tia2704@gmail.com',
            'username' => 'Sintya_tetapSemanagat',
            'password' => bcrypt('password'),
            'school'=>'SMA 1 Tarakan',
            'birthyear'=>'2001',
            'city'=>'Tarakan',
        ]);

        User::create([
            'name' => 'david',
            'email' => 'david@gmail.com',
            'username' => 'davidKeren',
            'password' => bcrypt('password'),
            'school'=>'SMA 1 Surabaya',
            'birthyear'=>'2002',
            'city'=>'Surabaya',
        ]);

        User::create([
            'name' => 'wanto',
            'email' => 'wanto@gmail.com',
            'username' => 'wantoKeren',
            'password' => bcrypt('password'),
            'school'=>'SMA 1 Surabaya',
            'birthyear'=>'2002',
            'city'=>'Surabaya',
        ]);

        User::create([
            'name' => 'lia',
            'email' => 'lia@gmail.com',
            'username' => 'liaCantik',
            'password' => bcrypt('password'),
            'school'=>'SMA 1 lamongan',
            'birthyear'=>'2002',
            'city'=>'lamongan',
        ]);

        User::factory(5)->create();
        Sej11_link_youtube::factory(3)->create();
        Sej11_Level::factory(10)->create();

    }
}
