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


        //soal level 1, ini id nya ngurut dari 1 sampe 15. nnti di level 2 id soalnya mulai dari 16 sampe 30 dan begitu seterusnya
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
            'soal' => "Siapakah yang memimpin Revolusi Russia saat Perang Dunia ke 1 berlangsung",
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
            'soal' => "Kondisi persaingan Industri dan militer antara Jerman dan Inggris sebenarnya juga didukung oleh masing-masing daerah koloni/jajahan di luar Eropa, sebagai salah satu negara yang memiliki wilayah jajahan paling luas di dunia, Inggris menitikberatkan pembangunan pertahanan angkatan lautnya, hal ini menurut Inggris sangat logis karena..",
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);


        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'soal' => "Bila dianalisis secara mendalam, faktor yang menyebabkan negara-negara di Eropa membentuk aliansi adalah karena …",
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'soal' => "Rasa Etnosentrisme yang berlebihan terwujud dalam gerakan Pan-Slavisme yang menghendaki seluruh etnis Slavia selatan menjadi satu negara utuh yang diperintah oleh Etnis Slavia selatan sendiri, menurut uraian materi, negara mana yang paling teguh mengumandangkan paham Pan-Slavisme di kawasan Balkan ...",
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'soal' => "Putra Mahkota yang tertembak di Sarajevo pada tahun 1914 merupakan anak dari .",
            'potongan_gambar' => "https://wallpaperaccess.com/full/169544.jpg",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 3,
            'soal' => "Pembunuhan terhadap Franz Ferdiinand mengakibatkan Perang Dunia II dimulai, mengapa Rusia lantas terlibat dalam perang tersebut",
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

        //nomor 3

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 3,
            'opsi_pg' => "Blok Sekutu dan Blok Sentral",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 3,
            'opsi_pg' => "Nasionalis dan Imperalis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 3,
            'opsi_pg' => "Blok Selatan dan Blok Timur",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 3,
            'opsi_pg' => "Jerman dan Amerika",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 3,
            'opsi_pg' => "Blok Serikat dan Blok Eropa",
            'status_benar' => 0,
        ]);

        //4, c
        // a. Terdapat perbedaan ideologi antara Jerman dan Rusia
        // b. Persaingan industri dan teknologi
        // c. Adanya persoalan pelabuhan di Laut Tengah
        // d. Jerman merebut wilayah jajahan Rusia
        // e. Keinginan untuk menguasai wilayah Balkan
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 4,
            'opsi_pg' => "Terdapat perbedaan ideologi antara Jerman dan Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 4,
            'opsi_pg' => "Persaingan industri dan teknologi",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 4,
            'opsi_pg' => "Adanya persoalan pelabuhan di Laut Tengah",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 4,
            'opsi_pg' => "Jerman merebut wilayah jajahan Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 4,
            'opsi_pg' => "Keinginan untuk menguasai wilayah Balkan",
            'status_benar' => 0,
        ]);
        //5, e
        // a. Rhine
        // b. Schifflen
        // c. Alsace-Lorraine
        // d. Brest-Litovsk
        // e. Somme

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 5,
            'opsi_pg' => "Rhine",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 5,
            'opsi_pg' => "Schifflen",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 5,
            'opsi_pg' => "Alsace-Lorraine",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 5,
            'opsi_pg' => "Brest-Litovsk",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 5,
            'opsi_pg' => "Somme",
            'status_benar' => 1,
        ]);

        //6,c

        // a. Militia
        // b. Arson
        // c. Genosida
        // d. Sabotase
        // e. Gencatan Senjata
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 6,
            'opsi_pg' => "Militia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 6,
            'opsi_pg' => "Arson",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 6,
            'opsi_pg' => "Genosida",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 6,
            'opsi_pg' => "Sabotase",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 6,
            'opsi_pg' => "Gencatan Senjata",
            'status_benar' => 0,
        ]);

        // 7,a
        // a. Luksemburg dan Belgia
        // b. Austria dan Prancis
        // c. Belgia dan Prancis
        // d. Litovsk dan Brest
        // e. Liege dan Brussel

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 7,
            'opsi_pg' => "Luksemburg dan Belgia",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 7,
            'opsi_pg' => "Austria dan Prancis",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 7,
            'opsi_pg' => "Belgia dan Prancis",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 7,
            'opsi_pg' => "Litovsk dan Brest",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 7,
            'opsi_pg' => "Liege dan Brussel",
            'status_benar' => 0,
        ]);


        // 8,d
        // a. Tsar Nikolai II
        // b. Pyotr Krasnov
        // c. Alexander Kerensky
        // d. Vladimir Lenin
        // e. Ottokar I

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 8,
            'opsi_pg' => "Tsar Nikolai II",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 8,
            'opsi_pg' => "Pyotr Krasnov",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 8,
            'opsi_pg' => "Alexander Kerensky",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 8,
            'opsi_pg' => "Vladimir Lenin",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 8,
            'opsi_pg' => "Ottokar I",
            'status_benar' => 0,
        ]);

        // 9,d
        // a. Amerika Serikat mempunyai hubungan dekat dengan blok Sekut
        // b. Amerika ingin memperluas wilayah kekuasaan
        // c. Adanya gencatan senjata yang dilakukan oleh Jerman
        // d. Jerman menenggelamkan tujuh kapal dagang Amerika Serikat dan penerbitan telegram Zimmerman
        // e. Terdapat propaganda Jerman yang menghina presiden Amerika Serikat

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 9,
            'opsi_pg' => "Amerika Serikat mempunyai hubungan dekat dengan blok Sekut",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 9,
            'opsi_pg' => "Amerika ingin memperluas wilayah kekuasaan",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 9,
            'opsi_pg' => "Jerman menenggelamkan tujuh kapal dagang Amerika Serikat dan penerbitan telegram Zimmerman",
            'status_benar' => 1,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 9,
            'opsi_pg' => "Terdapat propaganda Jerman yang menghina presiden Amerika Serikat",
            'status_benar' => 0,
        ]);

        // 10. e
        // a. 1916
        // b. 1917
        // c. 1920
        // d. 1918
        // e. 1919
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 10,
            'opsi_pg' => "1916",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 10,
            'opsi_pg' => "1917",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 10,
            'opsi_pg' => "1920",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 10,
            'opsi_pg' => "1918",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 10,
            'opsi_pg' => "1919",
            'status_benar' => 1,
        ]);

        //nomor 11
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Inggris belum mempunyai teknologi pesawat terbang pada tahun 1910",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Angkatan laut menjadi tradisi dan kebanggaan Inggris sejak masa abad pertengahan",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Inggris menjajah India dan negara-negara Afrika yang memiliki cadangan kayu sangat besar untuk pembangunan kapal laut",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Inggris memerlukan angkatan laut yang kuat karena merupakan negara kepulauan",
            'status_benar' => 1,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Pembangunan Angkatan Laut merupakan kelemahan Jerman sehingga untuk mengimbangi kekuatan Jerman, Inggris perlu membangun hal yang Jerman tidak miliki",
            'status_benar' => 0,
        ]);
        //nomor 12, b
        // A. Ancaman dari negara sekutu
        // B. Rasa terancam terhadap kekuatan negara lain
        // C. Saling menuntungkan secara ekonomi dan politik
        // D. Mencari negara yang senasib dan sepenanggungan
        // E. Berupaya mewujudkan pemerintahan dunia yang bersih dan netral

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Ancaman dari negara sekutu",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Rasa terancam terhadap kekuatan negara lain",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Saling menuntungkan secara ekonomi dan politik",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Mencari negara yang senasib dan sepenanggungan",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Berupaya mewujudkan pemerintahan dunia yang bersih dan netral",
            'status_benar' => 0,
        ]);

        //nomor 13, d
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "Bosnia",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "Kroasia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "Slovenia",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "Serbia",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "Makedonia",
            'status_benar' => 0,
        ]);

        //nomor 14, c

        // A. Kaisar Jerman
        // B. Kaisar Serbia
        // C. Kaisar Austria-Hongaria
        // D. Raja Rusia
        // E. Penguasa Bosnia 

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Kaisar Jerman",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Kaisar Serbia",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Kaisar Austria-Hongaria",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Raja Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Penguasa Bosnia",
            'status_benar' => 0,
        ]);

        //nomor 15, A
        // A. Terikat oleh aliansi sesama negara Slav dengan negara Serbia
        // B. Memiliki keinginan untuk sama-sama menghancurkan Jerman dan Austria-Hongaria yang sering mengancam perbatasannya
        // C. Rusia memiliki kepentingan ekonomi terhadap adanya Perang besar untuk memakmurkan rakyatnya
        // D. Franz Ferdinand merupakan menantu dari Kaisar Rusia, Nicholas II dari dinasti Romanoff
        // E. Rusia marah terhadap Serbia karena putra mahkotanya terbunuh

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Terikat oleh aliansi sesama negara Slav dengan negara Serbia",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Memiliki keinginan untuk sama-sama menghancurkan Jerman dan Austria-Hongaria yang sering mengancam perbatasannya",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Rusia memiliki kepentingan ekonomi terhadap adanya Perang besar untuk memakmurkan rakyatnya",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Franz Ferdinand merupakan menantu dari Kaisar Rusia, Nicholas II dari dinasti Romanoff",
            'status_benar' => 0,
        ]);
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Rusia marah terhadap Serbia karena putra mahkotanya terbunuh",
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
