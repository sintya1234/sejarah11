<?php

namespace Database\Seeders;

use App\Models\Sej11_gambar_materi;
use App\Models\Sej11_Level;
use App\Models\Sej11_link_youtube;
use App\Models\sej11_opsi_isian;
use App\Models\sej11_opsi_pilgan;
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
//user
        User::create([
            'name' => 'sintya tri wahyu adityawati',
            'email' => 'sintya.tia2704@gmail.com',      
            'username' => 'Sintya_tetapSemanagat',
            'password' => bcrypt('password'),
            'school' => 'SMA 1 Tarakan',
            'birthyear' => '2001',
            'city' => 'Tarakan',
            'photo' => 'photo.jpg'
        ]);

        User::create([
            'name' => 'david',
            'email' => 'david@gmail.com',
           
            'username' => 'davidKeren',
            'password' => bcrypt('password'),
            'school' => 'SMA 1 Surabaya',
            'birthyear' => '2002',
            'city' => 'Surabaya',
            'photo' => 'photo.jpg'
        ]);

        User::create([
            'name' => 'wanto',
            'email' => 'wanto@gmail.com',
            'username' => 'wantoKeren',
            'password' => bcrypt('password'),
            'school' => 'SMA 1 Surabaya',
            'birthyear' => '2002',
            'city' => 'Surabaya',
            'photo' => 'photo.jpg'
        ]);

        User::create([
            'name' => 'lia',
            'email' => 'lia@gmail.com',
            'username' => 'liaCantik',
            'password' => bcrypt('password'),
            'school' => 'SMA 1 lamongan',
            'birthyear' => '2002',
            'city' => 'lamongan',
            'photo' => 'photo.jpg'
        ]);


        //soal
        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'soal' => "Apa penyebab terjadinya Perang Dunia ke 1?",
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'soal' => "Terdapat dua kubu yang saling berlawanan saat Perang Dunia ke 1 dimulai, apa sebutan / nama kedua kubu tersebut?",
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'soal' => "Jerman dan Rusia saling bermusuhan menjelang Perang Dunia I karena",         
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
           
            'soal' => "Perang dunia I terkenal akan adanya perang parit, dimana para tentara berlindung di dalam parit untuk menunggu musuh datang atau sekedar mempertahankan garis wilayah, salah satu pertempuran parit terbesar di Perang Dunia I adalah ",
         
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
           
            'soal' => "Salah satu tindak kejahatan di Perang Dunia I dengan tujuan untuk memusnahkan Sebagian atau keseluruhan etnis, kelompok dan golongan disebut",
           
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
         
            'soal' => "Pada saat penyerangan Jerman ke Front Barat, terdapat dua negara yang di invasi Jerman terlebih dahulu, kedua negara tersebut adalah",
        
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
          
            'soal' => "Amerika Serikat menyatakan perang terhadap Jerman karena",
           
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            
            'soal' => "Salah satu perjanjian perdamaian antara negara-negara pihak Sekutu dan Jerman adalah Perjanjian Versailles, pada tahun berapa perjanjian tersebut ditandatangani",
            
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
           
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
          
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
           
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
           
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
           
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",

        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
           
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
           
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
           
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
           
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
           
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
           
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        //opsi 
        //level 1 
        //nomor 1
        sej11_opsi_pilgan::create(
            [
                'sej11_soal_id' => 1,
                'opsi_pg' => "24 Juli 1914",
                'status_benar' => 0,
            ]
        );

        sej11_opsi_pilgan::create(
            [
                'sej11_soal_id' => 1,
                'opsi_pg' => "28 Juni 1914",
                'status_benar' => 0,
            ]
        );

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 1,
            'opsi_pg' => "28 Juli 1914",
            'status_benar' => 1,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 1,
            'opsi_pg' => "24 Juni 1914",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 1,
            'opsi_pg' => "28 Juli 1919",
            'status_benar' => 0,
        ]);

         //nomor 2
         sej11_opsi_pilgan::create([
            'sej11_soal_id' => 2,
            'opsi_pg' => "Pembunuhan Adipati Agung Franz Ferdinand",
            'status_benar' => 1,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 2,
            'opsi_pg' => "Krisis ekonomi di berbagai negara",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 2,
            'opsi_pg' => "Invasi Jerman ke Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 2,
            'opsi_pg' => "Adanya perbedaan ideologi antar negara",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 2,
            'opsi_pg' => "Terdapat persaingan industri dan teknologi antara Jerman dan Rusia",
            'status_benar' => 0,
        ]);

     
      
        //waktu
        sej11_waktu::create([
            'waktu' => 30,
        ]);

        sej11_waktu::create([
            'waktu' => 20,
        ]);

        sej11_waktu::create([
            'waktu' => 10,
        ]);

        User::factory(10)->create();
        Sej11_link_youtube::factory(3)->create();
        Sej11_Level::factory(10)->create();
        Sej11_gambar_materi::factory(5)->create();
    }
}
