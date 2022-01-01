<?php

namespace Database\Seeders;

use App\Models\Sej11_Level;
use App\Models\Sej11_link_youtube;
use App\Models\sej11_soal;
use App\Models\sej11_waktu;
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

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'gambar_materi_id' => null,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'gambar_materi_id' => null,
            'soal' => "Apa penyebab terjadinya Perang Dunia ke 1?",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'gambar_materi_id' => null,
            'soal' => "Terdapat dua kubu yang saling berlawanan saat Perang Dunia ke 1 dimulai, apa sebutan / nama kedua kubu tersebut?",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'gambar_materi_id' => null,
            'soal' => "Jerman dan Rusia saling bermusuhan menjelang Perang Dunia I karena",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'gambar_materi_id' => null,
            'soal' => "Perang dunia I terkenal akan adanya perang parit, dimana para tentara berlindung di dalam parit untuk menunggu musuh datang atau sekedar mempertahankan garis wilayah, salah satu pertempuran parit terbesar di Perang Dunia I adalah ",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'gambar_materi_id' => null,
            'soal' => "Salah satu tindak kejahatan di Perang Dunia I dengan tujuan untuk memusnahkan Sebagian atau keseluruhan etnis, kelompok dan golongan disebut",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'gambar_materi_id' => null,
            'soal' => "Pada saat penyerangan Jerman ke Front Barat, terdapat dua negara yang di invasi Jerman terlebih dahulu, kedua negara tersebut adalah",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'gambar_materi_id' => null,
            'soal' => "Amerika Serikat menyatakan perang terhadap Jerman karena",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'gambar_materi_id' => null,
            'soal' => "Salah satu perjanjian perdamaian antara negara-negara pihak Sekutu dan Jerman adalah Perjanjian Versailles, pada tahun berapa perjanjian tersebut ditandatangani",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'gambar_materi_id' => null,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'jenis_soal'=>0,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'gambar_materi_id' => null,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'jenis_soal'=>1,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'gambar_materi_id' => null,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'jenis_soal'=>1,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'gambar_materi_id' => null,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'jenis_soal'=>1,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'gambar_materi_id' => null,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'jenis_soal'=>1,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'gambar_materi_id' => null,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'jenis_soal'=>1,
        ]);

        sej11_waktu::create([
            'waktu' => 30,
        ]);

        sej11_waktu::create([
            'waktu' => 20,
        ]);

        sej11_waktu::create([
            'waktu' => 10,
        ]);


        User::factory(5)->create();
        Sej11_link_youtube::factory(3)->create();
        Sej11_Level::factory(10)->create();

    }
}
