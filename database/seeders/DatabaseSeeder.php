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

        //materi create

        Sej11_Level::create([
            'gambar_utuh' => 'https://cdn.idntimes.com/content-images/community/2020/02/68fc053a9d97771de57a7c5392fa0966-27e435653733845e08f03235521847fa_600x400.jpg',
            'judul_sub_bab' => 'Perang Dunia I',
            'materi' => '<p>Perang Dunia I terjadi pada tahun 1914 – 1918, Peperangan ini awalnya merupakan pertikaian antara dua aliansi negara-negara yang ada di Eropa, yaitu “Triple Alliance” dengan anggota: Jerman, Austria-Hongaria, Italia (keluar dan diganti dengan Turki Usmani) melawan “Triple Entente” dengan anggota Perancis, Rusia dan Inggris, baru pada tahun 1917, Amerika Serikat ikut membantu pihak Triple Entente sekaligus membantu mengakhiri perang.</p>

            <h1>Faktor-faktor penyebab terjadinya Perang Dunia I</h1>
            <h2>I. Penyebab Umum Perang Dunia I</h2>
            <h3>a) Persaingan Industri dan kekuatan militer antara negara Jerman dan Inggris </h3>
            <p>
                Jerman adalah kekaisaran besar selepas unifikasi Jerman dibawah pemerintahan kanselir Otto Von Bismarck pada tahun 1871, selepas berhasil menyatukan Jerman, baik yang berada di kawasan Germania, maupun yang berada di daerah negara lain, para kanselir penerus Otto Von Bismarck mulai melakukan berbagai politik ekspansi untuk memperkuat negaranya, begitupun dengan dengan negara eropa lain seperti Inggris, Inggris ketika itu telah mendominasi seperempat dunia dibawah penjajahannya dan semakin kuat di bidang kelautan.
            </p>
            
            <p>
                Rasa terancam oleh kekuatan militer negara lain membuat Jerman semakin menggonjot produksi alat-alat persenjataan dan militernya, sejak 1910 hingga 1914 Jerman telah menaikkan anggaran pertahanannya sebanyak 73% dan hal ini membuat negara-negara Eropa lain, termasuk Inggris yang juga merasa terancam dengan kekuatan militer Jerman. Akhirnya negara-negara di Eropa saling memperkuat Angkatan bersenjatanya masing-masing.
            </p>
            
            <h3>b) Politik aliansi antar negara-negara di Eropa</h3>
            <p>Aliansi-aliansi yang muncul di Eropa membuat suasana makin memanas karena masing-masing pihak selalu berupaya untuk terlihat lebih kuat daripada aliansi lain. Suasana ini merupakan bahan bakar yang sangat cukup untuk memulai sebuah perang. Italia merupakan satu-satunya negara yang ikut dalam aliansi Triple Alliance namun kemudian dalam Perang Dunia I dia keluar dan bergabung ke dalam aliansi Triple Entente, penyebabnya antara lain adalah Italia dijanjikan wilayah Dalmatia dapat menjadi wilayahnya oleh Inggris dan Perancis.</p>
            <p>Terdapat dua kubu aliansi yang saling bermusuhan, kedua aliansi tersebut dikenal dengan nama Blok Sentral (Jerman, Austria-Hongaria, dan Turki) dan Blok Sekutu (Britania Raya, Perancis, Rusia, Amerika Serikat).</p>
            
            <h3>c) Etnosentrisme yang berlebihan</h3>
            <p>Etnosentrisme adalah rasa kebanggaan yang berlebihan terhadap etnis atau sukunya, paham ini muncul di awal abad ke-20 baik dari pihak orang-orang Jerman maupun dari pihak orang-orang Slav, Orang Jerman melakukan unifikasi atau penyatuan yang berkeinginan menyatukan seluruh wilayah yang berbahasa Jerman kedalam satu kekaisaran, meskipun wilayah tersebut telah menjadi milik negara lain, sedangkan etnosentrisme muncul pula di kalangan orang-orang Slav, etnis Slav adalah penduduk yang tinggal di wilayah Rusia, Ukraina, hingga ke semenanjung Balkan, orang-orang Slav pada saat itu pula berkeinginan agar seluruh etnis slav, khususnya etnis Slavia selatan, bergabung di dalam satu negara, gerakan ini umumnya disebut Pan-Slavisme, sedangkan menjelang pecahnya Perang Dunia I, wilayah Bosnia merupakan wilayah milik dari kekaisaran Austria-Hongaria, kasus ini yang kemudian memancing berbagai peristiwa yang akan menjadi penyulut dari Perang Dunia I, yaitu penembakan terhadap Putra Mahkota Austria-Hongaria yang pada saat itu berada di Sarajevo, Ibukota Bosnia.</p>
            
            <h2>II. Penyebab Khusus Perang Dunia I</h2>
            <p>Apabila kamu sudah membaca penyebab khusus dari Perang Dunia I, pasti kamu sudah membayangkan betapa di Eropa pada tahun 1914, hanya cukup sebuah pemantik/penyulut yang kemudian menjadi ledakan besar peperangan, rasa sentimen antar aliansi dan perlombaan persenjataan akhirnya mencapai titik didih ketika terjadi sebuah peristiwa penting di Sarajevo, Ibukota Bosnia pada tanggal 18 Juni 1944.</p>
            <p>Ketika itu, Kekaisaran Autria-Hongaria telah menduduki Bosnia dan menjadikannya sebuah provinsi baru di kekaisaran tersebut, hal ini sangat bertentangan dengan kemauan kaum Pan-Slavisme, maka gerakan-gerakan yang memprotes pendudukan Austria-Hongaria di Bosnia terus dilancarkan oleh orangorang yang menganut paham Pan-Slavisme, salah satunya adalah menyabotase parade Putra Mahkota termasuk membunuhnya.</p>
            <p>Pangeran Franz Ferdinand adalah putra mahkota dari Franz Joseph, pada Juni 1914, sedang melakukan kunjungan ke Sarajevo dalam rangka peresmian sebuah rumah sakit, namun ternyata kedatangannya telah ditunggu oleh kaum konspirator atau organisasi teroris yang berpaham Pan-Slavisme, organisasi ini dikenal dengan nama Black Hand.</p>
            <p>Penembakan terhadap putra mahkota Kekaisaran Austro-Hongaria yang bernama Franz Ferdinand di Sarajevo sontak membuat Kekaisaran Austria-Hongaria menjadi marah besar, Kaisarnya yaitu Franz Joseph, yang juga merupakan ayah dari Franz Ferdinand lantas menuding bahwa pembunuhan anaknya pasti didalangi oleh organisasi teroris yang disokong oleh para pejabat militer Serbia, Austria-Hongaria segera menargetkan amarahnya kepada Serbia yang dianggap bertanggung jawab terhadap pembunuhan anaknya tersebut.</p>
            <p>Jerman, sebagai sekutu dari Austria-Hongaria berdiri di belakang AustriaHongaria dan menjaga agar negara-negara lain di Triple Entente tidak campur tangan terhadap krisis ini, malangnya, Rusia sebagai negara penyokong etnis Slav terbesar mau tidak mau harus terlibat dalam peperangan antara Austria-Hongaria, meskipun harus menghadapi sepupunya sendiri (Kaisar Wilhelm II dari Jerman). Ketika ultimatum dari Austria-Hongaria kepada Serbia tidak dipenuhi, tidak ada alasan lagi untuk Jerman dan Austria untuk tidak melakukan serangan ke Serbia, Perang Dunia I pun pecah.</p>
            <p>Negara Rusia kini terseret dalam peperangan, sekutu-sekutunya yaitu Perancis dan Inggris pada awalnya masih berupaya tidak terseret dalam peperangan, Namun melihat adanya mobilisasi pasukan besar-besaran dari Jerman khususnya ke arah Barat (Perancis) maka Perancis pun mengambil ancang-ancang untuk menerima serangan dari Jerman, niat Perancis ini pun diperkuat dengan adanya keinginan untuk merebut kembali wilayah Alsace-Lorraine dari tangan Jerman. Sedangkan Inggris masih berupaya menyelesaikan krisis ini dengan jalur damai, bahkan Inggris menawarkan diri untuk membantu menggelar dialog antara Austria-Hongaria dan Serbia, Jerman menolak dan Austria-Hongaria menginginkan perang. Maka ketika akhirnya Jerman menyerbu Belgia sebagai langkah untuk menyerang Perancis, Inggris (yang terikat perjanjian dengan Belgia) harus menyatakan perang juga kepada Jerman. </p>
            <p>Sedangkan Italia yang awalnya merupakan bagian dari Triple Alliance justru membantu Inggris dan Perancis untuk menyerang Jerman dan Austria-Hongaria, karena pada tahun 1915, para pemimpin negara Inggris dan Perancis menjanjikan kepada Italia wilayah Dalmatia yang diduduki oleh Austria-Hongaria, sementara di lain pihak, Turki Usmani/Ottoman justru bergabung dengan Jerman dan AustriaHongaria karena memiliki musuh yang sama, yaitu Rusia dan negara-negara Slav di kawasan Balkan.</p>
            
            <h3>III. Rusia Menarik Diri dari Perang</h3>
            <p>Rusia tidak mengikuti Perang Dunia I hingga selesai, karena ketika perang berlangsung di Eropa, di ibukota kekaisaran Rusia sendiri terjadi kudeta berdarah terhadap dinasti Romanov pada tahun 1917, sebanyak 2 kali (Februari dan Oktober), sehingga memunculkan golongan Bolshevik sebagai penguasa baru dari Negara Rusia. Sementara mereka sendiri adalah golongan yang menentang keterlibatan Rusia dalam perang. </p>
            <p>Golongan Bolshevik ini sendiri lalu memprakarsai perjanjian Brest-Litovsk dengan Jerman pada bulan maret 1918, sehingga menarik keterlibatan Rusia di dalam Perang Dunia I, golongan bolshevik ini nantinya adalah yang bertanggung jawab terhadap pembentukan negara Uni Soviet yang berhaluan komunis.</p>
            
            <h3>IV. Amerika Serikat Memasuki Peperangan</h3>
            <p>Apakah kalian mengetahui kenapa Amerika Serikat, negara yang tidak berada dalam kawasan Eropa justru terlibat dalam Perang Dunia I ? meskipun Amerika Serikat berada di seberang lautan Atlantik, tapi Amerika Serikat memiliki hubungan sangat intens dengan Eropa Daratan, khususnya mengenai perdagangan dan industri, selain itu Amerika serikat juga terseret dalam Perang Dunia I, karena beberapa sebab, antara lain : </p>
            <p>a) Tenggelamnya kapal Lusitania pada tahun 1915 yang membawa ribuan penumpang dan termasuk 128 warga negara Amerika Serikat, insiden ini memancing kemarahan dari berbagai negara karena kapal Lusitania adalah kapal sipil. </p>
            <p>b) Kebijakan kapal selam tak terbatas (Unlimited Submarine warfare) dari Jerman dikeluarkan pada tahun 1915 yang memagari kawasan Eropa Utara dan Samudera Atlantik. Membuat macet seluruh perdagangan negara-negara di kawasan Eropa dan Amerika, kecaman justru datang juga dari negara-negara yang tidak terlibat sama sekali dalam Perang Dunia I.</p>
            <p>c) Insiden telegram Zimmerman, Telegram Menteri Luar Negeri Jerman tertanggal 16 Januari 1917 kepada duta besar Jerman untuk Amerika Serikat yang berhasil disadap dan dipecahkan kodenya oleh intelejen Inggris, isinya ternyata sangat mencengangkan, yaitu adalah meminta Duta Besar Jerman untuk AS, bekerja sama dengan Mexico dalam upaya menganggu keamanan dan stabilitas wilayah AS agar negara tersebut tidak bergabung dalam pihak sekutu dalam Perang Dunia I</p>
            
            <h1>Pengaruh PD I dan Lahirnya Liga Bangsa - Bangsa (LBB)</h1>
            <h2>I. Akhir Perang Dunia I dan Perjanjian Versailles</h2>
            <p>Selepas bergabungnya Amerika Serikat ke pihak sekutu, perang berlangsung semakin merugikan bagi pihak central, Jerman, Austria-Hongaria dan Turki Usmani harus menghadapi kenyataan bahwa kekalahan perang sudah di depan mata, bagi Jerman, apabila perang terus berlangsung, ancaman nyata dari segi ekonomi dan politik sudah membayang-bayangi, meskipun pada pertempuran di Front Timur, Jerman dan penguasa Rusia (partai Bolshevik) yang telah mengkudeta pemerintahan sementara (Duma) di Rusia telah menandatangani perjanjian Brest-Litovsk pada tahun 1918 dan mengakhiri keterlibatan Rusia dalam Perang Dunia I, ancaman nyata dari desakan pasukan Perancis, Inggris dan Amerika Serikat di front barat, selatan, Balkan dan Asia-Pasifik makin membesar.</p>
            <p>Kanselir Jerman yang baru, bernama Max Von Baden segera mengirim telegram kepada Presiden Amerika Serikat, Woodrow Wilson pada Oktober 1918 dan meminta gencatan senjata, hal ini dibalas dengan pengajuan 14 Syarat dari Amerika Serikat (kelak dikenal sebagai doktrin Wilson) kepada Jerman yang langsung dituruti oleh Jerman, sehingga pada 11 November 1918, Perang dunia I resmi berakhir.</p>
            <p>Malang bagi Jerman, syarat-syarat dari Presiden Amerika Serikat kepada Jerman dinilai terlalu lunak bagi Perancis, yang kemudian diperkuat oleh Inggris, Perancis (dan Inggris) bermaksud menghukum negara-negara yang kalah Perang (Blok Central) agar menjamin hal tersebut tidak terulang (Jerman tidak menjadi kekuatan yang mengancam kembali) akhirnya, Jerman dipanggil ke Istana Versailles di Perancis pada 28 Juni 1919 untuk menandatangani perjanjian, maka dari itu perjanjian tersebut disebut sebagai Perjanjian Versailles.</p>
            <p>Perjanjian Versailles tersebut ternyata jauh dari 14 syarat yang ditetapkan oleh Amerika Serikat, perjanjian itu sangat merugikan pihak Jerman dan pasal-pasal di Perjanjian tersebut seakan mengamputasi Jerman agar tidak kembali menjadi negara besar, selain itu wilayah-wilayah Jerman banyak yang dilucuti dan Jerman pun harus membayar seluruh kerugian perang yang diakibatkan kesalahan Jerman, yaitu menyulut perang. Kelak perjanjian Versailles ini akan menjadi bahan bakar bagi Adolf Hitler, pemimpin Jerman ketika Perang Dunia II, untuk membakar kembali semangat Rakyat Jerman yang menurutnya telah diinjak-injak pada perjanjian Versailles ini.</p>
            
            <h2>Doktrin Wilson (14 tuntutan Wilson)</h2>
            
            <p>1) Tidak boleh ada lagi perjanjian antar kekuatan yang tertutup</p>
            <p>2) Kebebasan Navigasi laut dimanapun kapanpun </p>
            <p>3) Perdagangan bebas harus diwujudkan dan hambatan-hambatan harus dipecahkan </p>
            <p>4) Pengurangan persenjatan di berbagai negara, sampai kepada prioritas untuk kebutuhan pertahanan domestik </p>
            <p>5) Koloni-koloni di luar Eropa harus diberi kesempatan bersuara mengenai nasib mereka </p>
            <p>6) Rusia diizinkan memerintah negaranya sendiri sesuai dengan asas pemerintahan yang dianggapnya paling benar </p>
            <p>7) Belgia harus dikosongkan dan dikembalikan situasinya seperti sebelum perang </p>
            <p>8) Perancis mendapatkan kembali Alsace-Lorraine dan tanah yang diambil ketika perang berlangsung </p>
            <p>9) Perbatasan Italia harus dikembalikan sesuai dengan identitas kebangsaan Italia di wilayah tersebut </p>
            <p>10)Hak menentukan nasib sendiri diberikan kepada kelompok-kelompok bangsa di Eropa </p>
            <p>11)Rumania, Montenegro dan Serbia harus dikosongkan oleh Jerman, dan Serbia diberikan akses menuju ke laut </p>
            <p>12)Turki Usmani (Ottoman) harus diperintah oleh orang Turki Usmani sendiri, bangsa-bangsa non-Turki harus diberi kesempatan dan kebebasan untuk menentukan nasibnya sendiri </p>
            <p>13)Polandia harus menjadi sebuah negara merdeka dengan akses yang menuju ke laut </p>
            <p>14) Liga Bangsa-bangsa (LBB) perkumpulan yang mencakup semua bangsa harus dibentuk dan untuk menjamin perdamaian dunia di masa depan.</p>
            
            <h2>II. Dampak Perang Dunia I bagi Dunia</h2>
            <h3>1. Kemunduran Eropa dalam Berbagai Bidang</h3>
            <p>Peperangan membawa kehancuran bagi berbagai infrastrukur di eropa, Jalan raya, rel kereta api, jembatan, dan fasilitas-fasilitas umum lain yang harus hancur akibat adanya perang, kehancuran infrastruktur ini mengakibatkan terhambatnya perdagangan, perputaran uang menjadi mandek, produksi barang-barang pun melambat, selain itu terdapat juga kehancuran-kehancuran lahan pertanian yang mengakibatkan suplai makanan bagi rakyat akhirnya harus berkurang. Dari segi jumlah korban jiwa, Perang Dunia I memakan korban lebih dari 10 juta jiwa, dan banyak dari korban tersebut adalah orang dalam usia produktif.</p>
            
            <h3>2. Kehancuran 4 Kekaisaran Besar di Dunia<h3>
            <p>Perang Dunia I ini ternyata juga menjadi penyebab dari kehancuran kekaisaran-kekaisaran besar dunia lho, Kekaisaran Jerman, Austria-Hongaria, Rusia dan Turki Usmani mendapatkan momen kehancurannya akibat kekalahan mereka di perang dunia I, sedangkan Rusia, meskipun pada awalnya berada di pihak pemenang, namun terjadi kudeta berdarah kepada keluarga kaisar oleh pihak-pihak kaum sosialis demokrat yang akhirnya juga dikudeta kembali oleh pihak komunis. </p>
            <p>Kehancuran 4 kekaisaran yang sudah sangat tua ini juga mengakibatkan lepasnya daerah-daerah koloni mereka di kawasan Asia dan Afrika, sebagai contoh, wilayah Arab yang telah ratusan tahun menjadi kawasan yang dikuasai Turki Usmani, akhirnya muncul sebagai negara-negara sendiri yang terlepas dari kekuasaan Turki Usmani, begitupula dengan negara-negara di Kawasan Afrika dan Asia. Kehancuran 4 kekaisaran tua ini juga membuat mulai munculnya negara-negara baru yang berdasarkan kebangsaan tertentu, walaupun di wilayah Timur Tengah, berdirinya negara-negara baru yang terlepas dari Turki Usmani, tidak lepas dari campur tangan negara pemenang PD I, seperti Inggris, yang menjadi perwalian dari beberapa negara, seperti Israel.</p>
            
            <h3>3. Berkembangnya ideologi komunisme</h3>
            <p>Apakah kamu masih ingat kekaisaran Rusia dikudeta pada tahun 1917, kudeta tersebut dilakukan oleh rakyat Rusia yang awalnya merupakan pihak-pihak kaum sosialisme, yang kemudian berselang beberapa bulan, terjadi kudeta kembali yang kemudian menegakkan pemerintahan bercorak Komunisme pertama kali di Dunia, yaitu Negara Uni Soviet, tokohnya yang bernama Vladimir Ilich Ulyanov atau biasa dikenal dengan nama Lenin, memimpin Rusia ke gerbang negara komunisme yang akhirnya mengembangkan ideologi tersebut ke seluruh dunia.</p>
            <p>Komunisme yang awalnya merupakan ideologi akhirnya mewujud menjadi sebuah negara yang mendominasi Sebagian dunia, hingga nanti selepas Perang Dunia II kekuatan Komunis akan berhadap-hadapan dengan Liberal-Kapitalis dalam perselisihan Perang Dingin (1948-1991). Kekuatan Komunisme yang lahir menjadi sebuah negara pada Perang Dunia I membuat ideologi ini bahkan menyebar hingga ke wilayah Hindia-Belanda (Indonesia) lewat adanya organisasi Komintern yang membuat penyebaran ideologi komunisme ini mampu melintasi batas-batas negara.</p>
            
            <h3>4. Lahirnya Fasisme</h3>
            <p>Keadaaan Jerman sebagai pihak yang kalah menjadi bara api yang tersimpan di hati orang Jerman, Perjanjian Versailles menjadi tonggak penghinaan terhadap Bangsa Jerman, meskipun negara mereka hancur dan bangkrut karena kalah perang, rasa kebanggaan dan cinta bangsa mereka tetap tersimpan dan bahkan menguat akibat perlakuan yang merendahkan mereka, bahan bakar ini kemudian dimanfaatkan oleh paham Fasisme yang menekankan kepada rasa cinta tanah air yang berlebihan sehingga kemudian mengesahkan pendudukan/penjajahan terhadap bangsa lain.</p>
            <p>Keadaan ini berlaku juga di Italia, meskipun berada di pihak yang menang, Italia mengalami kehancuran ekonomi yang besar, selain itu Pihak Italia juga merasa dikecewakan karena janji dari pihak Inggris dan Perancis mengenai wilayah Dalmatia tidak dipenuhi, munculnya pemimpin yang kuat seperti Bennito Mussolini lantas menyulut rasa nasionalisme di Italia secara berlebihan, yang kemudian berkembang menjadi ideologi fasisme.</p>
            
            <h3>5. Munculnya Israel dan Konflik Palestina</h3>
            <p>Pertempuran dalam Perang Dunia I di kawasan Timur Tengah ternyata menyebabkan banyaknya wilayah pendudukan dari Turki Usmani (Ottoman) yang kemudian, dibantu dengan Inggris, melepaskan diri. Ternyata selain orang-orang Arab yang menginginkan kemerdekaan dari Turki Usmani, Ada pula tokoh-tokoh dari kaum Zionis internasional (kaum yang menginginkan mendirikan negara di kawasan palestian) yang memandang kekalahan Turki Usmani kepada Inggris dan sekutunya merupakan kesempatan emas untuk mengambil alih kawasan Palestina dari tangan Turki Usmani.</p>
            <p>Pemimpin komunitas Yahudi di Inggris, Baron Rotschild menghubungi Menteri Luar Negeri Inggris, Arthur James Balfour dalam rangka mengupayakan Inggris agar membuka jalan bagi kaum Yahudi Internasional membangun sebuah negara di kawasan Palestina. Lahirlah deklarasi Balfour pada 2 November 1917 yang isinya bahwa Inggris akan mengupayakan membangun sebuah rumah bagi kaum Yahudi dari seluruh dunia di kawasan Palestina, dengan jaminan tidak akan mengganggu hak keagamaan dan sipil warga non-Yahudi di Palestina.</p>
            <p>Setelah deklarasi Balfour ini dimasukan ke dalam perjanjian Sevres tahun 1920 antara Sekutu dan Turki Usmani, maka kawasan negara-negara Arab banyak yang dimerdekakan, dan sebagian lagi menjadi wilayah yang dimandatkan kepada Inggris untuk diperintah, mulai saat itulah terjadi migrasi besar-besaran dari kaum Yahudi seluruh dunia khususnya dari Eropa, sejak saat itupula mulai muncul konflik-konflik antara kaum Yahudi pendatang yang akhirnya pada tahun 1948 mendirikan negara Israel dengan orang Arab Palestina yang merasa wilayahnya terancam oleh kedatangan para imigran Yahudi tersebut.</p>
            
            <h2>III. Lahirnya LBB dan Pengaruhnya bagi Dunia</h2>
            <p>Berakhirnya Perang Dunia I membuat banyak pemimpin dunia saat itu, khususnya Woodrow Wilson, yang menganggap perlunya sebuah lembaga internasional yang mencakup semua bangsa harus dibentuk untuk menjamin perdamaian di masa depan. Untuk itu pada perjanjian Versailles 28 Juni 1919, ditetapkanlah beberapa klausul dari perjanjian Versailes tersebut yang berkaitan dengan pendirian Liga Bangsa Bangsa dan kemudian tanggal 10 Januari 1920, Liga Bangsa-Bangsa diresmikan.</p>
            <p>Liga Bangsa-bangsa merupakan organisasi Internasional yang bertujuan untuk menjaga perdamaian dunia, pendiri Liga Bangsa-Bangsa (AS) berharap bahwa seluruh bangsa-bangsa di dunia dapat bergabung ke dalam LBB, karena ketika ada krisis antar negara atau bangsa, lembaga ini dapat menjadi salah satu penengah dalam upaya negosiasi antar pihak yang bertikai. Bahkan dalam Liga Bangsa Bangsa, para anggotanya telah mengatur mekanisme apabila ada pertikaian yang tidak dapat diselesaikan melalui jalur negosiasi.</p>
            <p>Meskipun Liga Bangsa-Bangsa terlihat dapat mencegah terjadinya perang antar negara-negara di dunia, nyatanya banyak hambatan yang ditemukan di tengah jalan yang menyebabkan Liga Bangsa-Bangsa tidak dapat melaksanakan tugasnya secara maksimal, terbukti pada 19 tahun sejak didirikannya lembaga tersebut, Perang Dunia II pecah.</p>
            
            <h2>IV. Pengaruh Perang Dunia I bagi Indonesia</h2>
            <p>Bagaimanakah pengaruh Perang Dunia I bagi Indonesia, apakah ada pengaruhnya? Ternyata pengaruh Perang Dunia I bagi masyarakat Indonesia cukup besar, khususnya bagi kaum pergerakan nasional. Kamu pasti masih ingat tentang bagaimana organisasi-organisasi pergerakan nasional mulai berdiri sejak tahun 1908 di Indonesia, para organisasi-organisasi pergerakan ini dimotori para kaum terpelajar kemudian seakan mendapatkan pengaruh dan dukungan dari pernyataan doktrin Wilson, khususnya pasal 10 tentang hak untuk menentukan nasib sendiri (right of self-determination), butir kesepuluh dalam doktrin Wilson ini membenarkan apa yang diperjuangkan dari para kaum pergerakan nasiona. Yaitu, menuntut kemerdekaan untuk menentukan nasibnya sendiri tanpa dijajah oleh bangsa lain.</p>',
        ]);
        
        Sej11_Level::create([
            'gambar_utuh' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Changde_battle.jpg',
            'judul_sub_bab' => 'Perang Dunia II',
            'materi' => '<p>Perang Dunia II atau Perang Dunia Kedua (biasa disingkat menjadi PDII atau PD2) adalah sebuah perang global yang berlangsung mulai tahun 1939 sampai 1945. Perang ini melibatkan banyak sekali negara di dunia —termasuk semua kekuatan besar—yang pada akhirnya membentuk dua aliansi militer yang saling bertentangan: Sekutu dan Poros. Perang ini merupakan perang terluas dalam sejarah yang melibatkan lebih dari 100 juta orang di berbagai pasukan militer. Dalam keadaan "perang total", negara-negara besar memaksimalkan seluruh kemampuan ekonomi, industri, dan ilmiahnya untuk keperluan perang, sehingga menghapus perbedaan antara sumber daya sipil dan militer. Ditandai oleh sejumlah peristiwa penting yang melibatkan kematian massal warga sipil, termasuk Holocaust dan pemakaian senjata nuklir dalam peperangan, perang ini memakan korban jiwa sebanyak 50 juta sampai 70 juta jiwa. Jumlah kematian ini menjadikan Perang Dunia II konflik paling mematikan sepanjang sejarah umat manusia.</p>

            <h2>Penyebab Terjadinya Perang Dunia II</h2>
            <p>Masih ingatkah penyebab umum dari Perang Dunia I, bila saat itu Jerman dan Austria-Hongaria memiliki kedekatan sebagai sesama anggota Triple alliance dan kekaisaran, kali ini Jerman memiliki kedekatan ideologis dengan Italia sesama penganut Fasisme dan rezim yang militeristik. Ideologi fasisme yang dianut oleh Jerman dan Italia pada akhirnya membangun sebuah sentimen nasionalisme yang sangat berlebihan sehingga menganggap bangsa lain lebih rendah (chauvinisme), kemudian karena menganggap bangsa lain lebih rendah dari bangsanya, maka mereka membenarkan adanya pendudukan dan penguasaan terhadap suatu wilayah demi tercapainya kemakmuran bagi rakyat dan Bangsanya sendiri.</p>
            <p>Lalu bagaimanakah dengan negara-negara pemenang Perang Dunia I ? telah dijelaskan di atas, negara Inggris dan Perancis masih sibuk untuk mengembalikan kondisi mereka sendiri akibat terjadinya Great Depression, untuk itu, atas tindakan Jerman yang berideologi fasisme, mereka melakukan sebuah kebijakan yang disebut sebagai kebijakan” Appeasement”. secara harafiah, kebijakan ini memiliki arti mengalah.</p>
            <p>Tindakan mengalah yang dilakukan Inggris dan Perancis terhadap Jerman ini berupaya untuk meredakan ketegangan dan berharap Jerman tidak melakukan upaya-upaya yang mengancam kestabilan eropa secara lebih besar. Kebijakan Appeasement yang dilakukan Inggris salah satunya adalah membiarkan Jerman kembali menempatkan pasukannya di Rhineland, yang merupakan wilayah zona demiliterisasi sesuai perjanjian Versailles, namun kebijakan Appeasement yang dilakukan Inggris dan Perancis akhirnya membiarkan pasukan Jerman bercokol disana dengan dalih bahwa kawasan Rhineland sejak dulu memang miliki Jerman.</p>
            <p>Kebijakan Appeasement yang paling kentara dilakukan Inggris dan Perancis adalah pada perjanjian Munich yang terjadi pada September 1938. Pada tahun 1938, Jerman menginvasi wilayah Sudetenland yang dikuasai Cekoslovakia, pada saat itu Jerman mengklaim wilayah itu sebagai bagian dari wilayah Jerman raya yang berarti menjadi hak Jerman, karena khawatir akan terjadinya peperangan bila tuntutan Jerman ditolak, maka Inggris, Perancis, Jerman dan Italia menandatangani Perjanjian Munich yang mengesahkan penguasaan Jerman terhadap kawasan sudetenland, namun perjanjian munich itu sendiri tidak mengikutsertakan Ceko sebagai pemilik sah kawasan Sudetenland, Ceko protes kepada Inggris dan Perancis, namun hal tersebut tidak membuat keputusan perjanjian Munich itu berubah, Inggris dan Perancis berharap sudetenland adalah kawasan terakhir yang dicaplok oleh Jerman, yang terbukti 100% ternyata mereka salah.</p>
            <p>Jerman dan Italia yang pada akhir tahun 1930-an menjadi lebih agresif, setelah menduduki Rhineland (1937), Sudetenland (1938), Cekoslovakia (1938), dan akhirnya pada 1 september 1939 Jerman menyerbu Polandia, yang menjadi gong penanda dimulainya Perang Dunia II. Inggris dan Perancis tidak tinggal diam terhadap serangan Jerman ke Polandia, negara-negara tersebut akhirnya meninggalkan kebijakan Appeasement nya dan menyatakan perang terhadap Jerman pada 3 September 1939. Sebelum terjadi penyerbuan ke Polandia, kita simak terlebih dahulu bagaimana Jerman menjalin perjanjian-perjanjian dengan beberapa negara yang terlibat dalam Perang Dunia II, Jerman menandatangani sebuah Pakta poros Roma – Berlin pada Mei 1936 yang menandai kesolidan antara Jerman dan Italia, selain itu, Jerman juga menandatangani pakta anti Komintern (komunis internasional) dengan Jepang pada November 1936. Kedua perjanjian ini menegaskan ketiga negara fasis tersebut terikat sebuah aliansi militer secara penuh. Blok ini kemudian disebut sebagai Blok Axis atau Poros, sedangkan yang menjadi lawan mereka adalah Blok Sekutu (Allied) yang terdiri dari Inggris, Perancis, Uni Soviet, China dan Amerika Serikat, serta negara-negara lain yang terancam oleh kekuatan Blok Axis.</p>
            
            <h2>Tumbuhnya Fasisme dan Doktrin Ultra-Nasionalisme</h2>
            <p>Jerman, Italia, dan Jepang tergabung dalam sebuah aliansi yang disebut Poros Roma-Berlin-Tokyo. Pihak lain menyebut mereka adalah blok axis dengan ideologi Fasisme di tiap negara tersebut. Sebenarnya apa ideologi Fasisme yang dianut oleh ketiga negara tersebut, dan bagaimana penerapannya dalam kehidupan ketiga negara tersebut yang pada akhirnya membawa dunia, sekali lagi, terlibat dalam Perang mega besar, yaitu Perang Dunia II.</p>
            <p>Permasalahan dari ideologi Fasisme selain bersifat totalitarian, ideologi tersebut juga memiliki seperangkat doktrin yang membuat pandangan merendahkan bangsa lain. Di Jepang, terdapat doktrin Hakko I-Chiu (secara harafiah berarti dunia delapan penjuru dalam satu atap) dengan doktrin ini, Jepang menganggap mendapat amanat untuk membangun kemakmuran bagi asia timur raya dengan Jepang sebagai pemimpinnya, sekilas doktrin ini terlihat sebuah inisiatif baik demi kemakmuran bersama, namun dalam penerapannya, itu berarti Jepang sah-sah saja untuk memasuki wilayah negara lain, menumbangkan penguasanya dan mendirikan pemerintahan sesuai dengan keinginan Bangsa Jepang, tentu saja hal ini salah besar.</p>
            <p>Begitupula di Jerman, dengan adanya doktrin Lebensraum (secara harafiah adalah ruang hidup) dimana Jerman merasa dirinya adalah bangsa lebih unggul dibanding Ras lain, dengan karunia bermata biru dan berambut pirang serta berhidung mancung, Jerman merasa, Ras Arya (ras dominan di Jerman) adalah peimpin yang ditakdirkan untuk memimpin dunia dibawah satu pemerintahan maka untuk mencukupi kehidupan ras terunggul di dunia ini, maka Jerman mengesahkan adanya pendudukan di kawasan negara lain demi menciptakan ruang hidup bagi para kelas atas bangsa Jerman.</p>
            <p>Dihembuskannya doktrin-doktrin ini di negara-negara Fasis menjadi penguat dan pembenaran bagi adanya pendudukan kawasan dan wilayah negara lain, sebut saja Jepang menyerbu tiongkok (1937), Italia menginvasi Ethiopia (1937), pendudukan Jerman di kawasan Sudetenland (1938), Cekoslovakia (1938) dan akhirnya Polandia (1939) yang akhirnya memulai pecahnya Perang Dunia II. Sedangkan penyerangan Jepang ke Pearl Harbour pada 7 Desember 1941, menandai dimulainya Perang Dunia II di Front Pasifik antara Jepang melawan sekutu.</p>
            
            <h2>Pengaruh PD II dan Lahirnya Perserikatan Bangsa-Bangsa (PBB)</h2>
            <h3>I. Pengaruh Perang Dunia II bagi Dunia</h3>
            <p>Perang Dunia II membawa pengaruh besar bagi dunia, dimana hampir semua bidang pemerintahan dan juga sosial mengalami perubahan. Salah satu perubahan dalam bidang pemerintahan adalah politik, dimana dalam hal politik sendiri adalah penghapusan paham fasisme dan runtuhnya politik-politik yang berbasis fasis. Kemudian dalam bidang sosial sendiri adalah krisis pangan dan krisis ekonomi-moneter yang hampir melanda seluruh bagian dunia. Kemudian masih ada dampak lain dari Perang Dunia II bagi dunia, apa sajakah dampak tersebut? Mari kita menyimak pembahasan dibawah:</p>
            
            <h4>1. Hancurnya Kekuatan Besar di Eropa Barat</h4>
            <p>Negara-negara Eropa Barat, seperti Jerman, Inggris, Perancis, Belanda, Belgia dan Luxemburg merupakan negara-negara yang hancur akibat terjadinya Perang Dunia II, selain itu di kawasan Asia, Jepang memerlukan waktu belasan tahun untuk kembali menjadi raksasa ekonomi, akibat dijatuhkannya Bom Atom di kota Hiroshima dan Nagasaki, begitu pula China yang harus menerima konsekuensi akibat pendudukan Jepang di wilayahnya.</p>
            <p>Kehancuran infrastruktur dan pabrik-pabrik mengakibatkan proses produksi melambat, bencana kelaparan dan kemiskinan membayangi setiap saat negara-negara yang terlibat dalam PD II, termasuk negara-negara pemenang. Pada perkembangan berikutnya kehadiran dua raksasa adidaya, yaitu Amerika Serikat dan Uni Soviet akan membantu pemulihan ekonomi dan pembangunan di Eropa, baik barat maupun timur. Dengan program Marshall Plan dan Molotov Plan yang diusung masing-masing negara.</p>
            
            <h4>2. Kemerdekaan bagi Negara Jajahan Eropa di Asia dan Afrika</h4>
            <p>Negara-negara non-eropa yang selama sebelum PD II menjadi jajahan dari bangsa-bangsa di Eropa, mendapatkan momentum yang baik ketika negara penjajah mereka melemah dan berfokus dalam menghadapi kekuatan Blok Axis dalam PD II, Inggris di India dan Burma, Belanda di Indonesia, Perancis di Indo-China, dan kawasan-kawasan lain dapat dikatakan mendapatkan waktu singkat untuk membangun kemerdekaan negaranya akibat terjadinya Perang Dunia II, sering juga proses ini disebut sebagai dekolonialisasi negara-negara di kawasan Asia-Afrika.</p>
            <p>Kekuatan negara-negara baru yang mendapat kemerdekaan setelah Perang Dunia II ini pada umumnya memang berasal dari Kawasan Asia-Afrika yang pada gilirannya nanti, sekitar tahun 1955, membuat sebuah konferensi yang bernama Konferensi Asia-Afrika. Dimana konferensi tersebut sangat menjunjung tinggi nilai-nilai kemerdekaan sebagai negara yang berdaulat dan termasuk di dalamnya adalah proses dekolonialisasi di negara-negara Kawasan Asia-Afrika.</p>
            
            <h4>3. Berkembangnya Teknologi Secara Pesat</h4>
            <p>Terjadinya Perang Dunia II membantu memaksa berkembangnya teknologi yang massif, meskipun pada awalnya diperuntukan untuk keperluan perang, seperti nuklir, ketika perang berakhir, teknologi-teknologi tersebut dialihfungsikan untuk kepentingan lain seperti produksi listrik dan telekomunikasi.</p>
            <p>Penggunaan Bom Atom di Hiroshima dan Nagasaki untuk mengakhiri perang kemudian membuat negara-negara besar, seperti Amerika Serikat, Uni Soviet, Inggris, China, menyadari, perlunya memiliki senjata pemusnah massal sebagai bagian dari kekuatan militernya. Hal ini pada berikutnya membawa dunia kepada sebuah perlombaan pembuatan senjata pemusnah massal besar-besaran, khususnya pada periode Perang Dingin.</p>
            
            <h4>4. Lahirnya Perserikatan Bangsa Bangsa (PBB)</h4>
            <p>Piagam San Fransisco pada 26 Juni 1945 ditandatangani oleh 50 negara yang kemudian disebut sebagai anggota asli PBB, piagam tersebut memuat pandangan umum mengenai persamaan hak dan derajat manusia dari bangsa manapun selain itu dalam pembukaan (Preambule) piagam tersebut tertuang pula keharusan memajukan standar hidup dan sosial demi mencapai kebebasan yang lebih besar.</p>
            <p>Deklarasi ini bersifat mengikat seluruh anggota yang menandatangi deklarasi ini, pendiri organisasi ini memiliki hak khusus yang disebut sebagai Hak Veto, yang berarti dapat menggagalkan keputusan atau resolusi apapun yang dihasilkan oleh PBB, kelima pendiri organiasi PBB ini sebenarnya adalah pihak-pihak pemenang dalam Perang Dunia II, antara lain adalah Amerika Serikat, Inggris, Perancis, Uni Soviet (kemudian berganti ke Rusia) dan China (kemudian berganti ke Republik Rakyat Tiongkok).</p>
            
            <h4>5. Dimulainya Era Perang Dingin</h4>
            <p>Apakah kamu tahu yang disebut Perang Dingin ?, perang dingin merupakan ketegangan yang timbul antara dua kekuatan besar dunia sebagai hasil kemenangan di Perang Dunia II, secara ideologi, Perang Dunia II dimenangkan oleh ideologi Liberalisme dan Komunisme melawan ideologi Fasisme. Ketika musuh bersama mereka telah kalah (Fasisme) maka terjadilah ketegangan antara ideologi Liberal, yang dimotori oleh Amerika Serikat dengan ideologi Komunisme yang dimotori oleh Uni Soviet dan pada perkembangan berikutnya oleh Republik Rakyat Tiongkok.</p>
            <p>Secara umum, perbedaan kedua ideologi tersebut meruncing karena adanya perbedaan pandangan dari kedua kekuatan tersebut mengenai bagaimana tatanan dunia selepas Perang Dunia II, masing-masing bersikukuh bahwa ideologi yang diusungnya adalah yang paling benar. Ketegangan ini setidaknya berlangsung cukup lama hingga pada tahun 1989, ketegangan ini mereda selepas bubarnya negara Uni Soviet yang kemudian diwariskan kepada negara Rusia.</p>
            
            <h2>II. Lahirnya Perserikatan Bangsa Bangsa (PBB)</h2>
            <p>PBB atau Perserikatan Bangsa Bangsa merupakan organisasi internasional yang bergerak untuk mendorong terjadinya kerjasama internasional yang meliputi kerjasama untuk menangani perosalan hukum internasional, pengamanan, ekonomi, perlindungan sosial. PBB didirikan pada tanggal 24 Oktober 1945 memiliki tujuan yang garis besarnya sama seperti Liga Bangsa Bangsa yang telah berdiri lebih dulu pada perang dunia II yaitu untuk mencegah konflik dan terjadinya peperangan.</p>
            <p>Saat dunia kacau dengan keadaan perang dan masyarakat dunia membutuhkan perwujudan kedamaian yang nyata sehingga ada sebuah harapan untuk Organisasi yang dapat menciptakan kerja sama antar bangsa yang erat untuk mewujudkan perdamaian dan mengatasi perang yang melanda saat itu.</p>
            <p>Akibat keadaan dunia semakin kacau dan tak terarah akibat perang membuat presiden Amerika Serikat Franklin Delano Roosevelt dan Perdana Menteri Inggris Winston Churchiil menggagas pertemuan yang menghasilkan sebuah kesepakatan yang disebut Piagam Atlantik.</p>
            
            <h4>A. Isi Piagram Atlantik sebagai berikut:</h4>
            <p>1. Tidak melakukan perluasan diantara semuanya (negara) </p>
            <p>2. Menjaga hak setiap bangsa untuk dapat memilih bentuk pemerintahan (tidak campur tangan) </p>
            <p>3. Mengakui hak semua negara agar turut serta dalam kerjasama ekonomi (pedagangan) </p>
            <p>4. Mengusahakan perdamaian dunia di setiap bangsa memiliki kesempatan untuk bebas dari rasa takut dan kemiskinan</p>
            <p>5. Mengupayakan penyelesaian masalah/sengketa secara damai</p>
            <p>Dari isi pokok piagam atlantik menjadi acuan dalam konferensi internasional mengenai penyelesaian perang dunia II dan menjadi jalan terbentuknya organisasi baru. Dalam hal ini organisasi yang dimaksud yaitu Perserikatan Bangsa-Bangsa.</p>
            
            <h4>B. Dilanjutkan dengan adanya beberapa pertemuan yang mengarah pada pembentukkan PBB yaitu: </h4>
            <p>1. Tahun 1943 di Moskow telah berhasil dengan adanya Deklarasi Moskow yang berisi tentang keamanan umum, deklarasi ini di tanda tangai oleh Inggris, Amerika Serikat, Rusia, dan cina dalah hal ini negara tersebut mengakui pentingnya organisasi internasional dalam mewujudkan perdamaian dunia.</p>
            <p>2. Pada 21 Agustus 1944 dilakukan konferensi Dumbarton Oaks yang di ikuti oleh 39 negara dan bertempat di Washington DC. Konferensi ini membahas rencana pendirian PBB. Setelah pertemuan ini telah dipersiapkan piagam PBB.</p>
            <p>3. Piagam PBB yang yang telah berhasil di rumuskan ditandatangani pada tanggal 26 juni 1945 di San Franscisco. Pada waktu penandatanganan piagam PBB ini di ikuti oleh 50 negara. Selanjutnya ke lima puluh negara tersebut memiliki sebutan Negara pendiri atau original members. Struktur Piagam PBB terdiri dari pembukaan dalam 4 alinea, Batang tubuh yang berisi 19 bab dan 111 butir pasal. Isi Piagam PBB memuat tujuan berdirinya PBB, Asas-asas, badan khusus, tugas dan kewajiban alat kelengkapan PBB, dan Keanggotaan PBB.</p>
            
            <h4>C. Asas – Asas Berdirinya PBB</h4>
            <p>PBB sebagai organisasi internasional yang telah ditetapkan selanjutkan akan bergerak untuk mewujudkan tujuannya dengan berpedang teguh pada asas – asas yang telah ditetapkan berikut penjelasan mengenai Asas- Asas Sejarah Berdirinya PBB:</p>
            <h5>1. Kedaulatan yang Sama </h5>
            <p>Setiap anggota PBB memiliki kedaulatan yang sama karena PBB didirikan dengan dasar persamaan kedudukan dari semua anggota yang bergabung. hal ini senada dengan ilustrasi peribahasa” berdiri sama tinggi, duduk sama rendah”.</p>
            <h5>2. Memenuhi Kewajiban</h5>
            <p>Setiap negara anggota harus memenuhi kewajiban yang telah ada didalam piagam PBB dengan penuh tanggungjawab dan ikhlas (tanpa mementingkan keuntungan dan kerugian).</p>
            <h5>3. Penyelesaian Perselisihan</h5>
            <p>Asas PBB selanjutnya yaitu Semua Negara anggota PBB diharapkan menyelesaikan setiap permasalahan baik sengketa wilayah maupun konflik internasional dengan jalan damai dan tidak membahayakan perdaiaman dan keamanan dunia serta berlaku adil.</p>
            <h5>4. Larangan Kekerasan Antar Negara </h5>
            <p>Semua negara Anggota PBB harus mencegah adanya tindakan kekerasan atau ancaman terhadap suatu daerah maupun kebebasan berpolitik suatu negara karena kekerasan bertentangan dengan tujuan PBB dalam melakukan kerjasama Internasional.</p>
            <h5>5. Tugas Pembantuan </h5>
            <p>Semua negara anggota harus membantu PBB dalam tindakan yang selaras dengan piagam PBB. Semua anggota memberikan bantuan apa saja yang diperlukan oleh PBB dan dijalankan sesuai ketentuan yang telah tercantum dalam piagam.</p>
            <h5>6. Pengendalian </h5>
            <p>PBB akan berupaya menjaga serta menjamin bahwa negara yang bukan anggota PBB juga akan bertindak selaras dengan piagam PBB untuk sekedar mendukung dan mempertahankan perdamaian</p>
            <h5>7. Menjamin Kebebasan </h5>
            <p>PBB tidak akan ikut campur dalam masalah dan pengaturan rumah tangga negara masing-masing anggota, dan PBB tidak dibenarkan melakukan pemaksaan terkait bagaimana menyelesaikan masalah dalam negara anggota. Artinya negara anggota masih bisa mengatur negaranya sendiri tanpa campur tangan PBB.</p>
            <p>Asas – asas ini telah diterapkan PBB selama berdirinya hingga saat ini beberapa bukti bahwa PBB sebagai organisasi internasional telah mampu dengan komitmen untuk menerapkan asas-asas demi mewujudkan perdamaian dunia.</p>
            
            <h4>D. Tujuan PBB</h4>
            <p>Sebagai organisasi internasional yang besar PBB memiliki tujuan dan peran yang sangat penting dalam perwujudan perdamaian dunia. Selain itu pada masa modern kini tujuan PBB juga mencakup kerjasama ekonomi dan sosial internasional berikut penjelasan tujuan Sejarah Berdirinya PBB:</p>
            <h5>1. Menjaga Keamanan dan Perdamaian Dunia</h5>
            <p>Sejak awal gagasan pembentukan oragnisasi internasional menitikberatkan pada perwujudan keamanan dan perdamaian dunia yang menjadi tujuan utama PBB. Dalam hal ini PBB akan berupaya dengan semua intrumennya baik dari PBB serta dengan memanfaatkan alat kelengkapan PBB seperti Badan / organisasi khusus PBB untuk mendukung tujuan menjaga keamanan dan perdamaian.</p>
            <h5>2. Memajukan Hubungan Persaudaraan Antar Bangsa</h5>
            <p>PBB memiliki tujuan untuk mempererat, memajukan dan mendorong hubungan persaudaraan antarbangsa melalui penghormatan dan perlindungan hak asasi manusia. Hal ini didukung dengan adanya Badan PBB yang bernama United Nations Human Rights yang dapat mengkoordinasikan aktivitas perlindungan HAM yang dilakukan oleh sistem PBB.</p>
            <h5>3. Kerjasama Internasional </h5>
            <p>Dilihat dari Struktur umum PBB terdiri dari lima organ utama yaitu majelis umum (dewan musyawarah utama) yang terdiri dari semua negara anggota yang aktif melakukan musyawarah bersama dalam peruode yang telah ditentukan, Dewan Keamanan, Dewan ekonomi dan sosial, mahkamah internasional, dan dewan perwalian (telah di nonaktifkan). Pembentukan Dewan Ekonomi Sosial untuk membantu majelis umum mendorong dan membina kerjasama internasional dalam pembangunan bidang ekonomi, sosial internasional, dan pembangunan. Anggota dari Dewan ekonomi ini ada 54 yang masing-masing dipilih oleh majelis utama selama periode kerja 3 tahun. Dewan ekonomi memiliki rangkaian tugas untuk menyelidiki dan membuat laporan tentang masalah perekonomian, sosial di seluruh dunia. Setelah melakukan research Dewan ekonomi akan membahas persoalan tersebut bersama negara anggota yang kemudian diusulkan kepada majelis umum, serta melakukan pertemua-pertemuan yang telah menjadi wewenangnya.</p>
            <h5>4. Perbantuan Internasional </h5>
            <p>Tujuan PBB berikutnya yaitu melakukan menyediakan bantuan kamanusiaanapabila terjadi kelaparan, bencana alam, maupun Konflik senjata pada suatu negara. Hal ini dilakukan sebagai bentuk upaya PBB dalam melindungi hak asasi manusia (Hak untuk hidup) serta upaya untuk mewujudkan kerjasama sosial. Dari daftar tujuan PBB diatas masih sangat relevan dan terlihat banyak sekali peran sentral yang dilakukan PBB dalam upaya menjaga dan mempertahankan perdamaian dunia sampai saat ini. PBB dalam melakukan tugaasnya tidak lepas dari sumbangsih dari para anggota yang telah tergabung PBB.</p>
            
            <h3>Pengaruh Perang Dunia II bagi Indonesia dan Proses Kemerdekaan</h3>
            <p>Pendudukan Jepang di Indonesia pada Perang Dunia II membawa kesempatan tersendiri bagi para pendiri bangsa ini untuk memproklamirkan kemerdekaan Indonesia, meskipun sejak September 1944, Perdana Menteri Kuniaki Koiso di Jepang telah menjanjikan kemerdekaan, namun hingga menyerahnya Jepang kepada sekutu pada 15 Agustus 1945, Jepang tidak kunjung serius terhadap janjinya tersebut, sehingga para pendiri bangsa kita harus berupaya dan berinisiatif sendiri memproklamirkan kemerdekaan Negara Indonesia.</p>',
        ]);

        Sej11_Level::create([
            'gambar_utuh' => 'https://www.history.com/.image/c_fill%2Ccs_srgb%2Cfl_progressive%2Ch_400%2Cq_auto:good%2Cw_620/MTU4MDgwODE0MDYyNTExMzA4/american-revolution.jpg',
            'judul_sub_bab' => 'Revolusi Amerika',
            'materi' => '<p>Revolusi Amerika Serikat adalah revolusi kolonial yang terjadi pada tahun 1765 sampai 1783. Patriot Amerika di Tiga Belas Koloni mengalahkan Britania Raya dalam Perang Revolusi Amerika (1775–1783) dengan bantuan Prancis, meraih kemerdekaan dari Britania Raya dan mendirikan Amerika Serikat.</p>

            <h2>Pemikiran-Pemikiran yang Melandasi Revolusi Amerika</h2>
            <h3>I. Paham Kebebasan dalam Perdagangan (Ekonomi)</h3>
            <p>Rakyat Amerika atau kaum koloni menganut paham kebebasan dalam perdagangan. Mereka bebas menjual dan membeli barang dagangan dengan siapa saja dengan harga yang disepakati bersama tanpa tekanan. Hal ini bertentangan dengan kehendak Inggris yang memerintahkan orang-orang di Amerika hanya menjual barang dan membeli barang kepada Inggris.</p>
            <h3>II. Paham kebebasan dalam Politik</h3>
            <p>Koloni Inggris di Amerika tidak didirikan oleh pemerintah Inggris, melainkan diciptakan oleh pelarian-pelarian agama yang tidak tahan hidup tertekan di Inggris, karena agamanya dilarang oleh pemerintah Inggris. Kaum koloni ini menyatakan bahwa mereka adalah manusia merdeka yang membangun koloni di dunia baru. Paham kebebasan kaum koloni ini bertentangan dengan pendapat Inggris yang mengklaim bahwa koloni adalah jajahannya. Faktor ini yang juga menyebabkan Amerika Serikat menjunjung tertinggi Hak Asasi Manusia dalam konstitusinya.</p>
            
            <h2>Sebab dan Jalannya Revolusi Amerika</h2>
            <p>Sebelum kedatangan orang kulit putih telah dihuni oleh penduduk asli yaitu suku bangsa Maya di Amerika Tengah, Aztecs di Mexico, Inka di Peru, Cibcha di Colombia, Sioux-Apache-Cheyenne di Amerika Utara. Orang kulit putih pertama yang datang dan mendiami Amerika adalah bangsa Noor dari Norwegia yang dikenal dengan nama Viking sekitar tahun 981 M. Pada tahun 1492, Columbus sampai di Kepulauan Bahama, Cuba dan Santo Dominggo. Ia mengira telah sampai di India, sehingga penduduk pulau itu disebut Indian. Semua pulau-pulau ini dimasukkannya dalam daerah kerajaan Spanyol. Setelah kedatangan Columbus itu, banyak orang Spanyol dan juga Portugis yang datang ke Amerika. Hingga akhirnya Mexico, Amerika Tengah, dan Amerika Selatan menjadi jajahan Spanyol. Brazil menjadi jajahan Portugis. Tinggal Amerika Utara yang belum ada pemiliknya. Mulailah pada abad ke-17, perebutan Amerika Utara oleh tiga negara yaitu:</p>
            <h3>1. Perancis</h3>
            <p>Tahun 1603 Samuel de Champlain menduduki Canada. 1682 La Salle menduduki daerah Sungai Misisipi. Tahun 1699 Berville menduduki daerah MuaRa Sungai Misisipi. Dengan ini Perancis mempunyai jajahan bagian tengah Amerika Utara (dari Canada ke New Odeans). </p>
            <h3>2. Inggris</h3>
            <p>Tahun 1584 Baleigh menduduki Virginia. Tahun 1620 Pilgrimfathers (Mayflower) menduduki Massachusetts. Tahun 1623 Calvert menduduki Meryland. Dengan ini timbul jajahan Inggris di sepanjang pantai Timur Amerika Utara.</p>
            <h3>3. Belanda</h3>
            <p>Tahun 1609 Hudson menduduki Sungai Hudson. Tahun 1626 Belanda menduduki Nieuw Amsterdam (sekarang New York).</p>
            <p>Tahun 1674 Inggris merebut Nieuw Amsterdam yang kemudian mengganti namanya menjadi New York. Dalam perang tujuh tahun (1756-1763) Inggris merebut dari Prancis wilayah Canada dan Louisiana (daerah Missisippi) sebelah Timur Sungai Missisippi. Lousiana sebelah Barat Missisippi dibeli dari Perancis pada tahun 1803. Florida dibeli dari Spanyol tahun 1819. Texas diduduki tahun 1845. California diambil dari Mexico 1848. Alaska dibeli dari Rusia tahun 1867 (diduduki Rusia pada tahun 1825). Dengan ini terjadi apa yang kita kenal sekarang sebagai Canada dan USA.</p>
            
            <h1>Perang Tujuh Tahun (1756-1763)</h1>
            <p>Jajahan Inggris di Amerika Utara terletak di sepanjang pantai timur. Dibelakang jajahan Inggris ini (di tanah pedalaman) terletak jajahan Perancis yang memanjang dari pantai selatan sepanjang sungai Missisippi (louisiana) sampai Canada. </p>
            <h3>Sebab-Akibat:</h3>
            <p>Tembak menembak antara pasukan Perancis dan Inggris di dekat benteng Perancis Duquesne (Pittsburgh). Dalam tembak menembak ini nampak untuk pertama kali keberanian besar dari George Washington. Dalam perang ini Perancis kalah. Dilakukanlah perdamaian Paris yang isinya:</p>
            <p>1. Canada dan Lousiana di sebelah timur Missisippi diberikan kepada Inggris, Lousiana sebelah Barat Missisippi diberikan kepada Perancis.</p>
            <p>2. Perancis menyerahkan semua jajahannya kepada Inggris, yang kemudian berakibat pada munculnya Inggris sebagai penjajah di Amerika Utara.</p>
            
            <h2>Perang Kemerdekaan Amerika Serikat (American Revolutionary War) (1775–1783)</h2>
            <p>Perang Revolusi Amerika Serikat berawal sebagai sebuah perang antara Kerajaan Britania Raya dan Amerika Serikat yang baru berdiri, namun perlahan menjadi perang global antara Britania di satu sisi dan Amerika Serikat, Prancis, Belanda, dan Spanyol di sisi lainnya. Perang ini dimenangkan oleh Amerika Serikat dengan hasil yang bercampur dengan kekuatan lainnya.</p>
            <h3>Sebab Umum Terjadinya Perang Kemerdekaan Amerika Serikat</h3>
            <p>1. Jajahan Inggris di Amerika tidak didirikan oleh pemerintah Inggris tetapi diciptakan pelarian-pelarian agama yang tidak tahan hidup tertekan di Inggris, karena agamanya dilarang pemerintah Inggris. Mereka keluar dari Inggris untuk mencari kebebasan hidup dan mendarat di Amerika. Diantara mereka yang terkenal adalah the pilgrimfather yang mendarat pada tahun 1620 dengan kapal Mayflower dan mendirikan Massachusetts. Orang Amerika sekarang menganggap the pilgrimfather sebagai pendiri-pendiri Amerika. Karena itu maka orang-orang Amerika sangat mencintai kebebasan dan kemerdekaan. Tetapi Inggris menganggap Amerika itu sebagai tanah jajahannya dalam arti kata yang kolot.</p>
            <p>2. Inggris memerintahkan bahwa hasil bumi Amerika seperti tembakau, gula, kapas, boleh dijual hanya kepada Inggris dan Amerika diperbolehkan hanya membeli barang-barang kebutuhannya dari Inggris saja. Dengan ini harga dapat dipermainkan oleh Inggris. Orang-orang Amerika yang menganut faham kebebasan juga dalam perdagangan menentang aturan Inggris itu</p>
            <p>3. Inggris yang butuh uang untuk mengisi kas Negara yang kosong karena biaya untuk perang tujuh tahun memaksa Amerika untuk membayar pajak. Karena perang tujuh tahun itu berarti juga perluasan daerah dan perlindungan bagi Amerika.</p>
            
            <h3>Sebab Khusus Terjadinya Perang Kemerdekaan Amerika Serikat</h3>
            <p>Pada tahun 1773 berlabuhlah di Boston 3 kapal Inggris yang memuat teh untuk Amerika. Atas teh ini Amerika harus membayar pajak kepada Inggris. Orang Amerika menolak. Pada malam hari orang-orang Amerika menyamar sebagai orang Indian dan melemparkan teh-teh itu ke dalam laut. Inggris marah dan menghukum Boston. Orang Amerika lainnya membela Boston dan pecahlah perang antara Inggris dan Amerika yang dipimpin oleh George Washington. Peristiwa ini sering disebut dengan ‘The Boston Tea Party’, 16 Desember 1773.</p>
            
            <h2>Alur Perang (1775-1778)</h2>
            <h3>1. Pertempuran Pertama</h3>
            <p>Pertempuran pertama meletus di Lexington, kemudian di Boston. Inggris memerintahkan Canada untuk membantu tentara Inggris. Permintaan ini ditolak oleh Canada. Inggris menggempur Canada untuk memaksa orang-orang di Canada dan timbulah pertempuran-pertempuran di Canada yang memberi kesempatan bagi Washington untuk mengatur tentaranya.</p>
            <p>Pada waktu itu orang-orang Amerika sesungguhnya belum menyadari apakah tujuan peperangan itu. Mereka bertempur melawan Inggris karena mereka merasa tertindas oleh aturan-aturan Inggris dan tidak untuk merdeka. Tetapi ini segera berubah menjadi perang kemerdekaan yang sesungguhnya ketika orang Amerika di tahun 1776 membaca tulisan Thomas Paine yang berjudul “ Common Sense. Tujuan menjadi terang yaitu “ kemerdekaan. Pada tahun itu juga mereka mengumumkan “ Decralation of Independence”</p>
            
            <h3>2. Declaration of Independence (4 Juli 1776)</h3>
            <p>Amerika menyatakan dirinya merdeka. Proklamasi ini disusun oleh Thomas Jefferson dalam Kongres di Philadelpia dari 13 negara bagian. Dan terkenal di dalamnya terkandung pernyataan hak-hak manusia (human rights).</p>
            
            <h3>3. Articles of Confederation (1777) </h3>
            <p>Kongres dari Negara-negara bagian menyetujui dan menerima rencana konfederasi dan terbentuklah The United States of America (USA). Negara pertama yang mengakuinya adalah Perancis (1778) yang kemudian membantu USA melawan Inggris dengan mengirimkan Jenderal Lafayette ke Amerika. Tindakan Perancis ini disebabkan oleh:</p>
            <p>a. Perancis ingin membalas dendam kepada Inggris, karena dulu kalah terhadap Inggris dalam perang tujuh tahun.</p>
            <p>b. Hasil diplomasi dari Benjamin Franklin di Eropa. Pada tahun 1779 Spanyol membantu USA (karena ingin mendapatkan kembali Gilbaltar dan Florida) dan mengumumkan perang kepada Inggris. Dengan bantuan-bantuan ini kedudukan USA menjadi kuat.</p>
            
            <h3>4. Perdamaian Paris (1784)</h3>
            <p>Inggris akhirnya kalah. Jenderal Inggris Cornwellis menyerah dengan 7000 orang tentaranya di Yorktown kepada Washington dan Lavayette. Perang berakhir. Perjanjian perdamaian diadakan di Paris yang isinya:” Inggris mengakui kemerdekaan USA”.</p>
            
            <h3>Pembentukan Undang Undang Dasar (1787 – 1789)</h3>
            <p>Tahun-tahun terakhir perang kemerdekaan sampai dengan pembentukan UUD merupakan masa pertentangan dan perselisihan antara 13 negara bagian. Nampak di sini adanya 2 blok: Selatan (9 negara bagian) dan Utara (4 negara bagian). Negara-negara bagian Selatan dipimpin oleh Thomas Jefferson dan Utara oleh Hamilton. Selatan menghendaki kekuasaan terbesar pada masing-masing Negara, Utara menghendai kekuasaan terbesar pada pemerintahan pusat.</p>
            <p>Pada tahun 1787 semua wakil Negara-negara berkumpul di Philadelpia untuk menyusun UUD. Antara Utara dan Selatan akhirnya didapat kompromi, yaitu Negara masing-masing bersumpah setia pada UUD dan tidak akan melanggarnya. Sebaliknya pemerintah pusat tidak akan campur tangan dalam negeri Negara-negara bagian. Urusan dalam negeri dipegang negara masing-masing. Urusan umum, luar negeri, pertahanan, dan lain-lain mengenai negara-negara Amerika itu semuanya dipegang oleh pemerintah pusat, yang terdiri dari:</p>
            <p>1. Presiden (untuk 4 tahun) dibantu oleh State Departement (9 kementrian) </p>
            <p>2. Congress (parlemen) teridiri dari:</p>
            <p>a. Senate; tiap Negara bagian mengirim 2 orang </p>
            <p>b. House of representatives; jumlah wakil atas dasar jumlah penduduk tiap-tiap Negara.</p>
            <p>Dengan adanya kesepakatan dalam penyusunan Undang-Undang Dasar dan Perangkat Negara lain, Amerika Serikat akhirnya berdiri sebagai sebuah negara yang lepas dari Inggris, dengan Presiden pertamanya adalah George Washington (1789 – 1797) untuk masa jabatan 2 periode.</p>
            
            <h2>Pengaruh Revolusi Amerika di Dunia</h2>
            <p>Revolusi Amerika merupakan salah satu revolusi besar dunia yang berpengaruh terhadap umat manusia. Di Eropa, Revolusi Amerika ini menjadi inspirasi terjadinya Revolusi Perancis. Rakyat Perancis secara bersama-sama bersatu menyerang dan menguasai penjara Bastille sebagai salah satu upaya menggulingkan kekuasaan Louis XVI yang absokut. Revolusi Amerika ini juga mempengaruhi wilayah-wilayah lainnya di dunia. Di Amerika Latin, pengaruh Revolusi Amerika mendorong negara-negara di kawasan itu untuk melepaskan diri dari ikatan penjajahan.</p>
            <p>Revolusi Amerika mempunyai pengaruh yang besar terhadap pelaksanaan hak asasi manusia dan pelaksanaan pemerintahan demokrasi di dunia. Hal ini dikarenakan Reformasi Amerika merupakan peperangan untuk mempertahankan kebebasan, kemerdekaan dan penghormatan terhadap hak asasi manusia. Presiden Amerika Serikat ke-16 Abraham Linconln dikenal sebagai tokoh yang memperjuangkan hak-hak asasi manusia. Ia seorang Presiden Amerika Serikat yang menentang praktik perbudakan. Penghapusan praktik perbudakan di Amerika Serikat membawa angin segar bagi pelaksanaan hak-hak asasi manusia yang mengilhami lahirnya Pernyataan Hak-Hak Asasi Manusia Sedunia pada 10 Desember 1948.</p>
            
            <h2>Pengaruh Revolusi Amerika di Indonesia</h2>
            <p>Sementara itu semangat Reformasi Amerika mempengaruhi pergerakan nasional di Indonesia. Pengaruh tersebut lebih bersifat pada paham-paham tentang hak bagi setiap bangsa untuk memperoleh kemerdekaan dan kedaulatan. Munculnya golongan terpelajar dan semakin luasnya hubungan antar bangsa, khususnya setelah dibukanya terusan Suez, telah membuka kesadaran akan perlunya hak asasi manusia. Kaum terpelajar berkesimpulan bahwa untuk mengangkat harkat dan martabat bangsa Indonesia tidak mungkin diperoleh dari tangan penjajah, melainkan harus diperhitungkan dengan kekuatan sendiri. Anggapan ini diyakini betul oleh organisasi-organisasi pergerakan nasional, seperti Indiche Partij, Perhimpunan Indonesia, dan PNI.</p>
            <p>Indiche Partij dalam tujuan organisasinya menyatakan bahwa hendak menumbuhkan dan meningkatkan integrasi semua golongan untuk memajukan tanah air yang dilandasi oleh jiwa nasional dan kehidupan rakyat yang merdeka. Sementara itu, Perhimpunan Indonesia secara lebih tegas menuliskan tujuan yaitu untuk memperoleh suatu pemerintahan untuk Indonesia. Hal ini dicapai tanpa meminta pertolongan siapa pun, juga tidak bekerja sama dengan pemerintah Kolonoal Belanda. Kemerdekaan Indonesia akan dicapai dengan aksi bersama yang serentak oleh rakyat Indonesia. PNI secara gambling menyatakan tujuannya “Indonesia Mereka”. Tujuan itu akan dicapai dengan asas “percaya pada diri sendiri”.</p>',
        ]);

        Sej11_Level::create([
            'gambar_utuh' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Indonesia_flag_raising_witnesses_17_August_1945.jpg/256px-Indonesia_flag_raising_witnesses_17_August_1945.jpg',
            'judul_sub_bab' => 'Revolusi Indonesia',
            'materi' => '<p>Revolusi Indonesia adalah suatu titik dimana dalam berdirinya negara Indonesia yang mempunyai kedaulatan penuh. Dalam titik tersebut terjadi berbagai peristiwa konflik bersenjata. Dimana terjadinya pertentangan antara pihak Republik Indonesia melawan penjajah Belanda yang dibantu oleh para sekutu-sekutunya.</p>

            <h2>Pemikiran-Pemikiran yang Melandasi Revolusi Indonesia</h2>
            <h3>I. Nasionalisme</h3>
            <p>Nasionalisme adalah sebuah paham kebangsaan dari masyarakat suatu negara yang memiliki kesadaran dan semangat cinta tanah air dan bangsa yang ditunjukkan melalui sikap dan tingkah laku individu atau masyarakatnya. Nasionalisme lahir dan berkembang di Indonesia didorong oleh berbagai faktor baik faktor internal maupun eksternal.</p>
            <h4>1. Faktor internal pendorong lahirnya nasionalisme di Indonesia antara lain:</h4>
            <p>a. Adanya kenangan kejayaan masa lampau di masa kerajaan Sriwijaya, Majapahit, Demak, Mataram Islam yang menjadi sumber inspirasi untuk mencapai kemajuan, kemegahan, dan kemakmuran yang sama</p>
            <p>b. Penderitaan dan kesengsaraan akibat kolonialisme dan imperalisme asing</p>
            <p>c. Munculnya golongan terpelajar yang berfikir kritis dan berani menentang kekuasaan para penjajah.</p>
            
            <h4>2. Faktor eksternal pendorong lahirnya nasionalisme di Indonesia antara lain:</h4>
            <p>a. Kemenangan perang Jepang terhadap Rusia (1905) telah memberikan semangat dan kepercayaan diri bangsa Indonesia untuk berani menentang kekejaman penjajah asing</p>
            <p>b. Pergerakan kebangsaan India, Philipina, Cina, Turki, nasionalisme Mesir telah menginspirasi bangsa Indonesia untuk bangkit melawan penjajah</p>
            <p>c. Masuknya paham-paman liberalisme, demokrasi, nasionalisme, Pan-Islamisme</p>
            <p>Rasa kebangsaan (nasionalisme) ini telah menyatukan bangsa Indonesia untuk bersama-sama berjuang merebut kemerdekaan demi tanah air yang sama. Bangkitnya semangat nasionalisme di Indonesia ditandai dengan tumbuhnya Pergerakan-Pergerakan Nasional, baik yang bersifat politik maupun sosial-keagamaan. Pergerakan nasional yang tumbuh seperti Budi Utomo, Indische Partij, Sarekat Islam, Partai Nasional Indonesia, Muhammadiyah, Nahdatul Ulama, Kayu Tanam, Taman Siswa, dan lain -lain. Rasa kebangsaan itu juga telah disepakati di dalam kongres sumpah pemuda yang melahirkan komitmen bersama seluruh pemuda Indonesia dalam ‘Sumpah Pemuda’ tanggal 28 Oktober 1928.</p>
            
            <h2>II. Demokrasi</h2>
            <p>Dominasi dan otoriter pemerintah penjajahan di Indonesia mendorong orang-orang Indonesia untuk dapat bersuara, berpendapat, menyerukan ide-ide dan pikiran untuk kemajuan bangsanya. Di dalam pemerintahan Belanda telah ada sebuah lembaga semacam Dewan Perwakilan Rakyat (Volksraad) yang berdiri tahun 1918.</p>
            <p>Sejatinya DPR buatan Belanda itu berisi perwakilan-perwakilan dari seluruh rakyat Indonesia, namun keanggotaan Volksraad didasarkan atas penunjukan oleh Gubernur Jenderal bukan atas pilihan rakyat. keanggotaan Volksraad didominasi oleh bangsa Eropa terutama Belanda. Volksraad didirikan bukan sebagai parlemen perwakilan rakyat melainkan hanya sebagai penasihat Gubernur Jenderal Hindia Belanda. Para tokoh politik terus berjuang agar ada perwakilan dari rakyat Indonesia yang duduk dalam dewan Volksraad yang menyuarakan kehendak rakyat.</p>
            
            <h2>Jalannya Revolusi</h2>
            <h3>1. Proklamasi Kemerdekaan Indonesia, 17 Agustus 1945</h3>
            <p>Transisi dari menyerahnya Jepang dalam Perang Dunia II dan belum datangnya Sekutu ke Indonesia merupakan keadaan Vacum of Power (kekosongan kekusasaan) di Indonesia. Jepang berkewajiban untuk menjaga status quo (tidak adanya perubahan politik apapun) di Indonesia. Di tengah keadaan itu, pemudaIndonesia bersama para tokoh politik bangsa mengambil keputusan untuk segera memproklamasikan Kemerdekaan Indonesia.</p>
            <p>Pada tanggal 17 Agustus 1945, Proklamasi kemerdekaan dikumandangkan di Jakarta disaksikan oleh para tokoh politik, para pemuda, dan rakyat. Berita proklamasi itu kemudian disebarluarkan ke seluruh penjuru tanah air melalui siaran-siaran radio, spanduk, selebaran, coretan-coretan di dinding, penyampaian secara lisan, dan media lainnya.</p>
            
            <h3>2. Perjuangan Bersenjata</h3>
            <p>Bulan September 1945, pasukan sekutu di bawah pimpinan Inggris (Christison) memasuki Indonesia untuk wilayah Jawa dan Sumatera. Untuk wilayah Indonesia Timur diduduki tentara Australia. Mereka mengemban tugas; melucuti tentara Jepang, membebaskan tawanan perang, dan pengembalian pemerintahan sipil. Masuknya tentara sekutu ini membawa pula NICA. Kemunculan tentara sekutu dan Belanda ini menimbulkan ketegangan dan pertempuran di wilayah-wilayah yang disinggahinya. Seperti pertempuran di Surabaya (10 - 28 November 1945), pertempuran di Ambarawa(20 November - 15 Desember 1945), Bandung Lautan Api (29 November 1945 - 24 Maret 1946), pertempuran Medan Area (18 Oktober 1945-15 Februari 1947), Agresi Militer Belanda I (21 Juli - 5 Agustus 1947), Agresi Militer Belanda II (19 Desember 1948 - Juli 1949), Serangan Umum 1 Maret 1949 di Jogjakarta, pertempuran di Bali, Manado, Palembang, dan daerah-daerah lainnya.</p>
            <p>Pertempuran Surabaya merupakan pertempuran tentara dan milisi pro-kemerdekaan Indonesia dan tentara Britania Raya dan India Britania. Puncaknya terjadi pada tanggal 10 November 1945. Pertempuran ini adalah perang pertama pasukan Indonesia dengan pasukan asing setelah Proklamasi Kemerdekaan Indonesia dan satu pertempuran terbesar dan terberat dalam sejarah Revolusi Nasional Indonesia yang menjadi simbol nasional atas perlawanan Indonesia terhadap kolonialisme. Sikap Heroisme, dahsyatnya pertempuran, dan jumlah pahlawan yang gugur telah menjadikan pertempuran 10 November di Surabaya ini diperingati sebagai Hari Pahlawan di Indonesia.</p>
            
            <h3>3. Perjuangan Diplomatik</h3>
            <h4>A. Perjanjian Linggarjati (15 November 1946) </h4>
            <p>Pertempuran yang terus menerus terjadi antara pihak pemuda Indonesia dan Sekutu-NICA menjadi perhatian dunia internasional. Atas prakarsa Inggris, Belanda dan RI mengadakan perundingan. Belanda mengingjnkan Indomesia menjadi negara persemakmuran Belanda melalui masa peralihan 10 tahun. Namun Indoneisa menginginkan sebuah negara yang berdaulat penuh atas wilayah bekas jajahan Belanda. Usulan pihak RI ini ditolak Belanda. Untuk menyelesaikan keteangan Indonesia -Belanda ini, pada tanggal 14 Oktober 1946 diadakan perundingan di Linggarjati. Pihak Indonesia dipimpin Sutan Syahrir, pihak Belanda oleh Wim Schermerhorn dan H.J Van Mook. Ingris diwakili oleh Lord Killerm sebagai penengah.</p>
            <p>Isi Pokok perjanjian Linggarjati :</p>
            <p>1. Pemerintah Belanda mengakui kekuasaan de facto RI atas Sumatera, Jawa, dan Madura. Belanda sudah harus meninggalkan daerah de facto paling lambat 1 Januari 1949</p>
            <p>2. Akan dibentuknya Negara Indonesia Serikat yang meliputi seluruh wilayah Hindia-Belanda</p>
            <p>3. Akan dibentuk Uni Indonesia-Belanda yang diketuai oleh Belanda</p>
            
            <h4>B. Perjanjian Renville (17 Januari 1948 dan 19 Januari 1948) </h4>
            <p>Setelah perjanjian Linggarjati, Belanda kembali menggempur RI melalui Agresi Militer Belanda I (21 Juli - 5 Agustus 1947). Dalam pertempuran ini Belanda berhasil menguasai Jakarta, Sumatera, Jawa Barat, Madura, dan Jawa Timur. RI kemudian memindahkan pusat pemerintahannya ke Yogyakarta.</p>
            <p>Dunia internasional mengutuk tindakan Belanda ini. Australia, India, Uni Soviet, dan Amerika Serikat mendukung Indonesia. PBB kemudian membentuk Komisi Tina Negara (KTN) untuk memediasi sengketa Indonesia-Belanda. PBB mengeluarkan resolusi gencatan senjata.</p>
            <p>Pada tanggal 17 Januari 1948, berlangsung perundingan di atas kapal Perang Amerika Serikat, Renville. Isi pokok perjanjian Renville :</p>
            <p>1. Wilayah Indonesia terdiri dari Sumatera, Jawa Tengah, dan Jogjakarta. Daerah yang diduduki Belanda melalui agresinya diakui oleh pihak RI sampai dengan diadakannya plebisit (penentuan pendapat) untuk menentukan aspirasi rakyat di daerah itu, apakah berhasrat bergabung dengan RI ataukah tidak</p>
            <p>2. Pihak RI menyetujui dibentuknya Uni Indonesia-Belanda</p>
            <p>3. Pemeirntah RI bersedia menarik semua pasukan dari daerah-daerah kantong grilya di daerah-daerah yang diduduki Belanda dan masuk ke wilayah RI</p>
            <p>Perjanjian Renville ditandatangani pada tanggal 19 Januari 1948.</p>
            
            
            <h4>C. Perjanjian Roem-Royen</h4>
            <p>Pada tanggal 19 Desember 1948 - Juli 1949, Belanda kembali menyerang pihak RI melalui Agresi Militer Belanda II. Dalam agresi II ini, Belanda berhasil menguasai ibu kota RI di Yogyakarta. Akibat serangan ini, pihak internasional melakukan tekanan kepada Belanda. Amerika Serikat bahkan mengancam akan menghentikan bantuan Marshall Plan kepada Belanda.</p>
            <p>Pada tanggal 28 Januari 1949 Dewan Keamanan PBB mengeluarkan resolusinya. Salah satu isinya adalah mengubah KTN menjadi Komisi Perserikatan Bangsa-Bangsa untuk Indonesia (United Nation Commission for Indonesia-UNCI). Tugasnya adalah untuk membantu kelancaran perundingan, mengurus pengembalian kekuasaan RI, mengamati pemilihan umum, dan berhak mengajukan usul untuk menyelesaikan konflik.</p>
            <p>Pada tanggal 7 Mei 1949 disepakatilah Perjanjian Room-Royen, yang isinya:</p>
            <p>1. Penghentian tembak menembak</p>
            <p>2. Kembalinya pemerintah RI ke Yogyakarta</p>
            <p>3. Akan diselenggarakannya Konferensi Meja Bundar</p>
            
            <h4>D. Konferensi Inter Indonesia (19-22 Juli 1949 dan 30 Juli - 2 Agustus 1949)</h4>
            <p>Untuk mempersiapkan diri menghadapi Konferensi Meja Bundar (KMB), Indonesia melaksanakan Konferensi Inter-Indonesia (KII). Konferensi ini dilakukan antara RI dengan Organisasi Negara-Negara Bagian (BFO).</p>
            <p>KII berlangsung dua kali. Konferensi pertama pada tanggal 19 - 22 Juli 1949 diadakah di Yogyakarta dipimpin oleh Moh, Hatta dan Konferensi kedua pada tanggal 30 Juli - 2 Agustus 1949 di Jakarta dipimpin oleh Sultan Hamid II. Secara umum hasil Konferensi Inter-Indonesia antara lain :</p>
            <p>1. BFO mendukung tuntutan RI agar pengakuan kedaulatan dilakukan tanpa ada ikatan politik maupun ekonomi dengan Belanda</p>
            <p>2. RI dan BFO membentuk komite persiapan dalam mengkoordinasikan kegiatan sebelum dan setelah KMB berlangsung</p>
            <p>3. Negara Indonesia Serikat (NIS) berganti nama menjadi Republik Indonesia Serikat</p>
            <p>4. Bendera kebangsaan, bahasa nasional, dan hari nasional RIS adalah Merah Putih, Bahasa Indonesia, dan 17 Agustus</p>
            <p>5. Angkatan Perang Republik Indonesia Serikat (APRIS) adalah angkatan perang nasional yang berintikan kekuatan TNI</p>
            
            <h4>E. Konferensi Meja Bundar (KMB), 23 Agustus - 2 November 1949 </h4>
            <p>Menindaklanjuti perundingan Roem-Royen, maka pada tanggal 23 Agustus dimulailah Konferensi Meja Bundar (KMB). Perundingan berakhir pada tanggal 2 November 1949 dengan tercapainya kata sepakat : </p>
            <p>1. Kerajaan Belanda mengakui kedaulatan RIS secara penuh dan tanpa syarat</p>
            <p>2. Pelaksanaan penyerahan kedaulatan akan dilakukan paling lambat tanggal 30 Desember 1949</p>
            <p>3. Masalah Irian Barat akan dibicarakan lagi 1 tahun setelah penyerahan kedaulatan kepada RIS</p>
            <p>4. RIS dan kerajaan Belanda terikat dalam suatu Uni Indonesia-Belanda berdasarkan kerjasama sukarela dan sederajat</p>
            <p>5. RIS mengembalikan hak milik Belanda dan memberikan hak konsesi dan izin baru untuk perusahaan-perusahaan Belanda</p>
            <p>6. RIS harus membayar semua utang Belanda yang ada sejak tahun 1942</p>
            <p>7. Kapal-kapal perang Belanda akan ditarik dari Indonesia dan beberapa korvet akan diserahkan kepada RIS</p>
            <p>Pada tanggal 27 Desember 1949 dilaksanakan serah terima kedaulatan dari pemerintah kerajaan Belanda kepada RIS. Serah terima dilaksanakan di Amsterdam</p>
            
            <h2>Pengaruh Revolusi Indonesia</h2>
            <p>Revolusi Nasional Indonesia merupakan sebuah konflik bersenjata dan pertentangan diplomasi antara pemerintah Republik Indonesia dengan Kerajaan Belanda yang berlangsung pada tanggal 17 Agustus 1945 hingga 27 Desember 1949. Dalam konflik bersenjata ini, pihak Kerajaan Belanda dibantu oleh pihak sekutu melalui bantuan dari tentara Inggris.</p>
            <p>Revolusi Indonesia terjadi karena diproklamasikannya kemerdekaan Indonesia setelah kekalahan Jepang atas sekutu. Di pihak lain, Belanda yang pernah berkuasa di Indonesia masih berkeinginan untuk menjajah wilayah Indonesia. Keinginan Belanda tersebut kemudian menimbulkan agresi militer Belanda yang pertama (1947) dan agresi militer Belanda yang kedua (1948).</p>
            <p>Konflik bersenjata antara pemerintah Indonesia melawan Belanda dengan dukungan sekutu ini kemudian berakhir setelah Indonesia mendapatkan pengakuan kedaulatan atau kemerdekaan Indonesia dari Kerajaan Belanda pada tanggal 29 Desember 1949 melalui kesepakatan dalam Konferensi Meja Bundar yang dilaksanakan di Den Haag, Belanda.</p>
            <p>Kemerdekaan merupakan jembatan emas bagi bangsa Indonesia untuk melaksanakan pembangunan seutuhnya. Indonesia bebas dan merdeka mengatur hidup bangsanya sendiri lepas dari ikatan bangsa kolonial. Ditengah-tengah negara-negara di dunia, Indonesia memiliki kedudukan sama dan sederajat.</p>',
        ]);

        Sej11_Level::create([
            'gambar_utuh' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Eug%C3%A8ne_Delacroix_-_Le_28_Juillet._La_Libert%C3%A9_guidant_le_peuple.jpg/299px-Eug%C3%A8ne_Delacroix_-_Le_28_Juillet._La_Libert%C3%A9_guidant_le_peuple.jpg',
            'judul_sub_bab' => 'Revolusi Perancis',
            'materi' => '<P>Revolusi Perancis (1789 – 1799) adalah suatu periode sosial radikal dan pergolakan politik di Prancis yang memiliki dampak abadi terhadap sejarah Prancis, dan lebih luas lagi, terhadap Eropa secara keseluruhan. Revolusi ini merupakan salah satu dari
            revolusi besar dunia yang mampu mengubah tatanan kehidupan masyarakat. Revolusi Perancis bukan peristiwa yang sekonyong-konyong terjadi meletus begitu saja, tetapi terikat pada kejadian-kejadian sebelumnya. Revolusi Perancis hanya suatu detik
            saja di mana fikiran-fikiran sebelumnya meledak menjadi tindakan-tindakan. Demikian juga Revolusi Perancis itu tidak merupakan semcam keistimewaan Perancis saja tetapi revolusi semacam itu dapat meletus juga di mana-mana di seluruh Eropa ketika
            itu, karena keadaan di seluruh Eropa menyerupai di Perancis, hanya mempunyai perbedaan gradual saja. Justru perbedaan yang gradual inilah yang menyebabkan revolusi itu meletus di Perancis.</P>
    
        <p>
            <h1>Pemikiran-Pemikiran yang Melandasi Revolusi Perancis</h1>
            <h2>I. Rasionalisme dan Aufklärung</h2>
    
            Abad XVIII adalah abad yang sangat kaya akan aliran-aliran faham yang bersimpang siur memenuhi alam fikiran manusia sebagai akibat dari Renaissance dan Humanisme. Rasionalisme dan Aufklärung memegang peranan yang terpenting dalam hal ini. Pikiran yang
            sehat memancarkan sinarnya yang gemilang hingga nampak dengan jelas kepincangan dan kesalahan yang sampai saat itu tidak dirasakan oleh umat manusia. Dengan adanya kritik yang kuat dari penganut faham Rasionalisme dan Aufklärung menyuarakan bahwa
            segala kepincangan dan kesalahan harus dilenyapkan. Dalam hal ini besar pengaruhnya Rasionalisme dan Aufklärung sebagai pendorong timbulnya Revolusi Perancis, karena Perancis ketika itu memang sedang masa yang kelam. Terdapat beberapa tokoh Rasionalisme
            dan Aufklärung yang terkenal di Perancis, mereka disebut dengan Philosophes dalam bahasa Perancis.<br> Tokoh-tokoh tersebut antara lain: <br> 1. Denis Diderot (1713-1784) dan J.d’ Alembert (1717-1784) Dua orang ini menciptakan Encyclopedia
            bagi Perancis yang memuat pengetahuan tentang segala hal yang diterangkan secara nasionalistis hingga sering merupakan kritik-kritik terhadap dogma-dogma yang kolot. <br> 2. Charles Secondat, Baron de la Brede et de Montesquieu (1689 – 1755) Pendapat-pendapat
            Montesquieu sangat dipengaruhi oleh pendapat-pendapat John Locke (1685 – 1753) dari Inggris, terutama dalam lapangan tatanegara. Teori-teori Montesquieu tentang “pemisahan kekuasaan” dalam tatanegara yang menjelmakan “Trias Politica” adalah pada
            asalnya teori dari John Locke. Jika John Locke mengemukakan “executive power”, legislative power, attributive power” sebagai pemisahan kekuasaan, maka ini dirubah oleh Montesquieu menjadi executive power, legislative power, judicative power”.
            Dengan melalui Montesquieu (dan beberapa penulis-penulis Perancis lainnya a.l. Voltaire, Rousseau) maka besar pengaruh Inggris dalam Revolusi Perancis, karena Montesquieu ingin merubah absolute monarchie Perancis menjadi Constituante Monarchie
            semacam di Inggris dan pendapat-pendapat Montesquie inilah yang nanti dilaksanakan dalam bentuk pertama Revolusi Perancis. <br> 3. Francois Marie Arouet (Voltaire) (1694-1778) Absolute Monarchie mengekang segala-galanya hingga tidak ada kemerdekaan
            di dalam segala lapangan. Sensor yang keras dan kejam diadakan. Despotisme merajalela. Terhadap inilah Voltaire mengarahkan serangan-serangannya yang dahsyat. Ia adalah seorang kritikus yang pedas lagi tepat. Sindiran-sindirannya selalu tepat
            mengenai sasarannya, jauh lebih tepat dari pada uraian-uraian atau tulisan-tulisan yang panjang lebar.
    
            <h2>II. Romantisme</h2>
            Romantisme yang mulai timbul pada tahun 1750 sebagai reaksi dari rasionalisme, juga banyak pengaruhnya dalam Revolusi Perancis. Romantisme menjunjung perasaan dan menghargai insting. Justru insting inilah yang nanti merajalela diantara rakyat jelata dan
            meneruskan perjuangan dimana kaum rasionalis tidak berani lagi karena menurut perhitungan secara rational tidak mungkin dapat diselesaikan. Bukan perhitungan secara rasional, secara kepala dingin, tetapi tekad yang irasional dari rakyat jelata
            (digerakkan oleh pemimpin-pemimpin rakyat penganut Rousseau, seperti Marat) yang nanti pada tahun 1792-1794 menyelamatkan Revolusi dari ancaman dahsyat tentara-tentara asing yang mengepung Perancis. Sentimen pun terbukti merupakan faktor yang
            penting dalam Revolusi Perancis. Salah satu tokoh romantic yang berpengaruh pada Revolusi Perancis adalah Jean Jacques Rosseau (1712 - 1778). Rousseau mengatakan bahwa alam semula adalah sempurna, tetapi kemudian salah bertumbuh menjadi dunia
            yang penuh kesengsaraan, karena masyarakat mendapatkan hak-hak asasi manusia berupa kebebasan dan persamaan, manusia dilahirkan bebas, tetapi ia sekarang terikat. Apa sebabnya? Kata Rousseau dalam bukunya yang terkenal “ Du Contrat Social”. Pendapat
            Rousseau tentang hak-hak asasi manusia ini nanti dicantumkan sebagai “Hak-Hak manusia dan warga negara dalam UUD 1789 yang mengatakan “manusia dilahirkan bebas dan dengan hak yang sama. Perbedaan dalam masyarakat hanya didasarkan atas kepentingan
            umum”. Manusia dilahirkan dengan hak yang sama. Tidak ada seorangpun yang mempunyai hak yang melebihi orang lain. Karena itu tidak mungkin barang sesuatu dapat ditentukan oleh seorang saja untuk semuanya (seperti dalam absolute monarchie). Segala
            sesuatu harus ditentukan bersama hingga keputusan itu merupakan kehendak umum. Paham Rousseau ini kemudian menimbulkan paham demokrasi modern.
    
            <h2>III. Paham dalam Perang Kemerdekaan Amerika</h2>
            Pada tahun 1771 meletuslah Perang Kemerdekaan Amerika (1774-1783). Dalam perang ini Perancis membantu Amerika dan mengirimkan tentara Perancis dibawah Lafayette ke Amerika. Setelah perang selesai, tentara Perancis pulang ke Perancis. Tentara Perancis
            yang kembali dari Amerika ini selama berperang di Amerika telah mengenal dan meresapkan faham-faham baru tentang hak-hak asasi manusia dan demokrasi. Bukankah mereka bertempur bersama-sama orang-orang Amerika untuk mempertahankan Declaration of
            Independence yang mengatakan bahwa manusia itu dilahirkan sama dan dengan hak-hak asasi: bahwa pemeritnahan dibentuk untuk menjamin hak-hak itu dan mendapatkan kekuasaannya dari rakyat: bahwa rakyat berhak menggantikan sesuatu pemerintahan yang
            melanggar asasi ini dengann pemerintahan lain yang lebih sesuai dengan kehendak rakyat. Dan apakah yang mereka dapatkan sekembali mereka di Perancis ? suatu pemerintahan yang tidak mengenal hak-hak asasi manusia. Tidak mengherankan jika prajurit-prajurit
            Perancis dari Amerika ini ingin merubah pemerintahan absolute monarchy Perancis yang kolot itu.</p>
    
        <p>
            <H1>Kondisi Perancis Menjelang Revolusi</H1>
            <h2>I. Feudalism / Feodalisme</h2>
            <p>Feodalisme di Eropa berasal dari zaman Abad Pertengahan, ketika raja sebagai pemilik dari tanah seluruhnya membagi-bagi tanhanya kepada orang-orang yang dianggapnya berjasa kepadanya sebagai pinjaman tanah. peminjam-peminjam tanah ini kemudian
                menjelma menjadi golongan yang berkuasa (yang kemudian disebut bangsawan juga disamping keluarga raja) dan selalu berusaha untuk mengurangi kekuasaan raja bagi kepentingannya sendiri. Timbullah akhirnya pertentangan dan perebutan kekuasaan
                antara raja dan golongan bangsawan. jika di Inggris raja gagal dalam usahanya untuk mematahkan kekuasaan bangsawan (ingat magna charta) hingga akhirnya menjelma menjadi constituante monarchie, maka lain halnya di Perancis. Kondisi di Perancis,
                Raja berhasil mengalahkan bangsawan-bangsawan, hingga akhirnya menjelma absolute monarchie. Tetapi kalah tidak berarti lenyap, bangsawan-bangsawan Perancis yang telah dilucuti senjatanya berusaha menggunakan kekuasaan raja untuk memperbesar
                kekuasaan bangsawan, baik terhadap raja sendiri maupun terhadap rakyat. Mereka berusaha untuk mendapatkan atau membeli hak-hak istimewa sebanyak mungkin yang pada hakekatnya untuk memblokir kekuasaan raja. Terhadap rakyat hak-hak istimewa
                itu digunakan oleh bangsawan untuk memperkaya diri sendiri, yang juga berarti memperbesar kekuasaannya.</p>
            <p> Disamping ini bangsawan juga merembes masuk alam kalangan agama. Lambat laun mereka berhasil juga menduduki kedudukan yang tinggi dalam agama dan yang berhak istimewa. Pangkat-pangkat yang rendah dipegang oleh rakyat jelata. Akhirnya bangsawan
                menghisap semua hak dan kepada rakyat hanya ditinggalkan kewajiban saja. Ketidakadilan inilah yang makin lama makin dirasakan oleh rakyat (terutama kaum terpelajar dikalangan rakyat), yang nanti meletuskan Revolusi Perancis. Ketidakadilan
                yang mengawali terjadinya Revolusi Perancis antara lain: A. Ketidakadilan dalam Lapangan Politik Jabatan-jabatan yang penting dipegang oleh bangsawan dan raja (Louis XVI adalah raja yang lemah) tinggal menandatangani saja. Tidak menurut kepandaian,
                tetapi menurut keturunan pegawai-pegawai negeri yang dipilihnya, hingga administrasi negara menjadi kacau dan korup. Rakyat jelata bagaimanapun pandainya tidak diperkenankan ikut dalam pemerintahan. B. Ketidakadilan dalam Lapangan Ekonomi
                Bangsawan diberikan hak istimewa yang membebaskan mereka dari pembayaran pajak, padahal merekalah yang sebenarnya golongan yang terkaya. Rakyat jelata (golongan yang sebagian besar sangat miskin) diharuskan membayar segala macam pajak, hingga
                rakayt jelatalah yang dengan ini mengisi kas negara.</p>
            <p>Tetapi uang negara tidak digunakan untuk kepentingan rakyat, melainkan untuk bangsawan dan raja saja. C. Kecuali Bebas Pajak, Bangsawan Bahkan Diberi Hak-Hak Istimewa untuk Memungut Pajak dari Rakyat Pajak tersebut merupakan tambahan pendapatan
                bagi bangsawan (pajak lalu lintas, pajak tanah, pajak penggilingan gandum, pajak penangkapan ikan, pajak anggur, pajak garam dan segala macam pajak lainnya yang dibuat-buat oleh bangsawan). Disamping bangsawan, gereja pun memungut 1/10 dari
                penghasilan rakyat jelata. Ditambah lagi hak istimewa bangsawan untuk mempekerjakan rakyat jelata dengan percuma. D. Ketidakadilan dalam Penggolongan Feodalisme membagi-bagi masyarakat dalam golongan-golongan yang berhak dan yang tidak berhak.
                Di Perancis ketika terdapat tiga golongan masyarakat yaitu : golongan ke-1 (bangsawan), golongan ke-II (kaum agama), golongan ke-III (rakyat jelata). Golongan ke-II terdiri atas kaum agama tinggi (berasal dari bangsawan) dan kaum agama rendah
                (berasal dari rakyat jelata). Bangsawan dan kaum agama tinggi berhak istimewa, kaum agama rendah dan rakyat jelata tidak berhak sama sekali. Dengan ini dapat dimengerti, apa sebabnya dalam Etats Generaux 1789 golongan ke-I dan ke-II menghendaki
                pemungutan suara secara pergolongan, golongan ke-III secara perorangan. Golongan ke –III terdiri atas : kaum terpelajar, kaum borjuis, rakyat jelata. Kaum terpelajar merasa tidak adanya keadilan, karena meskipun pandai tetapi tidak mungkin
                ikut serta menentukan nasib negaranya karena mereka bukan bangsawan. </p>
            <p>Mereka ingin merubah susunan pemerintahan negara, mereka ingin “a role by law and not by man”. Mereka menghendaki Constituante Monarchi. Kaum borjuis merasa mereka adalah golongan yang paling berguna bagi negara, karena merupakan sendi sendi ekonomi
                negara. Tetapi mereka selalu dikalahkan terhadap kaum bangsawan yang mereka pandang sebagai golongan yang tidak produktif dan tidak berguna bagi negara karena hanya memikirkan diri sendiri. Kaum borjuislah yang membayar pajak yang terbanyak
                dan hanya habis dimakan kaum bangsawan. Mereka anti bangsawan, karena itu mereka tidak anti raja (ingat: bangsawan adalah lawan raja) karena raja dipandangnya sebagai alat yang terpenting yang dapat menindas bangsawan . Mereka menghendaki
                constituante monarchi. Rakyat jelata ketika itu masih non aktif, hanya berkeluh kesah saja karena beratnya beban yang dipikul. Mereka mula-mula menaruh harapan pada rajanya untuk meringankan beban mereka, tetapi ketika raja menyia-nyiakan
                harapan ini, maka rakyat jelata dengan sekaligus menjadi radikal anti raja. Mereka menghendaki Republik. Dengan ini rakyat jelata menjadi lawan dari kaum terpelajar dan kaum borjuis yang nanti nampak dalam Revolusi Perancis sebagai pergulatan
                antara partai Girondin (terpelajar + borjuis) dan partai Jacobin (rakyat jelata).</p>
            <h2>II. Absolut Monarchie yang Buruk</h2>
            Absolute Monarchie adalah kerajaan yang kedaulatannya dipegang sepenuhnya oleh raja. Nasib negara berada dalam tangan raja dan ditentukan menurut nilai orang yang menjadi raja. Nilai Louis XVI sebagai raja tidak tinggi dan karena itu absolute monarchie
            dibawahnya merupakan absolute monarchie dalam bentuk yang seburuk-buruknya. Sifat absolute monarcie dibawah Louis XVI ialah :<br> A. Despotisme Otokrasi Raja (sifat terutama dari tiap absolute monarchie) Selama pemerintahan Louis XVI merosot
            tajam menjadi despotisme belaka. Tujuan pemerintah negara tidak lagi menciptakan suatu negara yang teratur tetapi untuk menanam “gezag” raja saja yang pada hakekatnya untuk memberi kelonggaran saja bagi tindakan-tindakan sewengan-wenang, baik
            bagi raja maupun bagi bangsawan. Kepentingan raja diutamakan, kepentingan rakyat dilupakan. Rakyat jelata sangat menderita. Despotisme tidak tahan mendengar kritik, baik kritik destruktif maupun konstruktif ditindas dengan kejam. Hidup menjadi
            tidak merdeka lagi, segala-galanya terkekang. <br> B. Feodalisme Feodalisme hanya menjamin kenikmatan hidup para bangsawan dan kaum agama tinggi saja. Tidak adanya persamaan hak dan kewajiban berarti tidak ada keadilan sosial.<br> C. Substitutie
            Stelsel (Sistem Perwakilan) Bangsawan yang menduduki jabatan yang tinggi tidak mau menjalankan sendiri kewajiban-kewajibannya, tetapi menyewa rakyat jelata yang pandai (dengan gaji kecil). Gaji yang besar dari jabatan itu, pujian-pujian dan hadiah
            raja, kehormatan yang tinggi. Semua itu diterima kaum bangsawan sebagai pejabat resmi. Wakilnya yang menjalankan kewajibannya, tidak menerima apa-apa kecuali gajinya yang kecil itu. D. Adminstrasi Negara Yang Tidak Seragam Adanya hak-hak istimewa
            menjadikan administrasi negara tidak seragam. Tidak adanya keseragaman ini menyebabkan adminstrasi negara menjadi kacau balau yang memberi kesempatan dan kelonggaran bagi korupsi. Hampir 1/6 pendapatan negara tiap tahun habis dikorup para bangsawan.
    
            <h2>III. Vacuum of Power</h2>
            Disamping memuncaknya ketidakadilan dan kemunculan paham baru, masih ada satu faktor lagi yang menyebabkan Revolusi Perancis meletus pada masa Louis XVI. Faktor itu ialah the vacuum of power (tidak adanya kekuasaan) dibawah Louis XVI. Raja Louis XVI adalah
            raja yang lemah tidak punya kewibawaan sama sekali , baik terhadap bangsawan maupun terhadap rakyat. Rakat tidak takut padanya. Dulu zaman Louis XIV dan Louis XV, rakyat betul benci terhadap raja, tetapi mereka takut terhadapnya, dan karena itu
            tidak timbul revolusi. “Vacuum of power” ini merupakan faktor yang sangat berbahaya bagi kehidupan suatu negara, karena merupakan kesempatan yang baik sekali bagi musuh-musuh negara untuk menjatuhkan negara.
    
            <h2>IV. Soal Keuangan Negara</h2>
            Sebab khusus meletusnya Revolusi Perancis adalah soal keuangan negara. Sudah menjadi kebiasaan di Perancis (sejak wafatnya Louis XIV) bahwa negara menderita kekurangan perbelanjaan yang lazimnya ditutup dengan mendapatkan pinjaman negara. Kekurangan perbelanjaan
            ini disebabkan karena uang negara dihambur-hamburkan raja dan bangsawan untuk kepentingan dan kesenangan mereka sendiri. Pada tahun 1789 negara menghadapi bangkrut. Penghasilan negara 500 juta, pengeluaran 625 juta, hutang negara yang harus dibayar
            300 juta. Bagaimana cara mendapatkan uang? Menaikkan pajak?. Pajak telah berat sekali. Pinjam uang? Hutang negara telah melampaui batas kekuatan pembayaran kembali. Tidak ada jalan lain kecuali mewajibkan semua bangsawan (bebas dari pajak) membayar
            pajak. Bangsawan menolak. Timbul kritis antara raja dan bangsawan. Takut terhadap raja, bangsawan mencari dukungan dari rakyat dengan mengatakan bahwa soal pajak adalah soal rakyat seluruhnya. Raja tidak boleh menentukan sendiri. Dengan ini bangsawan
            hendak membatasi kekuasaan raja untuk menyelamatkan diri mereka. Mereka mengusulkan diundangnya kembali “Etats Generaux (Dewan Perwakilan Rakyat) yang sejak tahun 1614 tidak pernah berkumpul lagi. Raja pun menyetujui, dan Etats Generaux kembali
            berkumpul.
        </p>
    
        <p>
            <h1>Jalannya Revolusi Prancis</h1>
            <p>Pada tanggal 17 Juni 1789 wakil-wakil golongan III (Rakyat Jelata) memproklamasikan Etats Generoux sebagai Assemblee Nationale (Dewan Nasional= Perwakilan Bangsa Perancis). Tindakan ini mempunyai arti yang sangat penting. Etats Generoux yang merupakan
                siding golongan-golongan menjelma menjadi siding seluruh rakyat tanpa golongan-golongan. Sungguh suatu revolusi yang besar, karean pada hakekatnya itu berarti bahwa suatu masyarakat yang feodalistis berubah menjadi demokratis. Sesungguhnya
                tanggal 17 Juni 1789 telah dimulainya revolusi, walaupun secara resmi revolusi Perancis ditandai dengan diserbunya “Penjara Bastile”, Secara politik Revolus Perancis dimulai pada 17 Juni 1789, militer pada 14 Juli 1789. Pada perkembangan selanjutnya
                Assemble Nationale akan berkembang setelah banyak Golongan I (Pendeta) dan Golongan II (Bangsawan) yang bergabung dan lantas merubah namanya menjadi sebuah dewan bernama Constituante. Pada tanggal 14 Juli 1789 rakyat Prancis menyerbu penjara
                Bastille, suatu bangunan yang kuat dan megah lambang absolute monarki karena di dalamnya dipenjarakan pemimpin-pemimpin rakyat dan mereka yang berani menentang absolute monarki. Bastille ini dijaga ketat karena merupakan juga gudang persenjataan
                raja. Sebab-sebab rakyat menyerbu penjara Bastille: </p>
            <p>1. Rakyat Paris mendengar desas-desus bahwa raja mengumpulkan tentaranya di sekitar Paris untuk menindas revolusi.<br> 2. Rakyat Paris butuh senjata untuk mempertahankan diri. Mereka ingin mendapatkan senjata yang ada di dalam Bastille. Serbuan
                rakyat ke Bastille berhasil baik ketika kesatuan tentara raja yang berada di Paris memihak dan membantu rakyat. Bastille dapat direbut pada tanggal 14 Juli 1789, hari itu dianggap sebagai awal revolusi dan kemudian diresmikan sebagai hari
                nasional Prancis. Bendera Bourbon (raja) diganti dengan bendera nasional (biru, putih, merah) dan tentara nasional dibentuk (di bawah pimpinan Lafayette, seorang bangsawan yang berpaham baru dan terkenal sebagai pahlawan yang memimpin tentara
                Prancis di perang kemerdekaan Amerika). Sejak itu raja dan bangsawan tidak berkuasa lagi. rakyat jelatalah yang berkuasa dan memegang pimpinan negara. Pemimpin-pemimpin rakyat yang terkenal dalam Constituante ialah Mirabeu (bangsawan), Lavayette
                (bangsawan), Sieyes (kaum agama). Setelah rakyat jelata dapat mengalahkan lawannya yaitu kaum bangsawan dan kaum agama maka tugas rakyat jelata sekarang adalah menghapuskan ancient regime, dan menyusun pemerintahan baru:<br>
                <p>A. Menghapuskan Ancient Regime Penghapusan ancient regime ini dijalankan secara tegas. Semua hak-hak istimewa dan sebutan-sebutan bangsawan dilenyapkan (orang saling memanggil dengan sebutan “citoyen”; perkataan “bung” di Indonesia). Gilde
                    dihapuskan hingga perdagangan menjadi bebas. Ini merupakan pelaksanaan liberalisme yang dalam ekonomi bersemboyan: laissez faire, laissez passer. Kaum agama dijadikan pegawai negeri biasa dan milik gereja disita. Ini kemudian menimbulkan
                    pertentangan yang hebat antara kaum Revolusi Perancis dan Paus di Roma. Dengan ini kaum agama dianggap musuh revolusi, dan revolusi bersifat anti-agama Rooms-Katholik.
                    <br>B. Menyusun Pemerintahan Baru Setelah pemerintahan lama (ancient regime) dihancurkan kaum revolusi terus menyusun pemerintahan baru. Dasar dari pemerintahan baru ini adalah “Declaratin des droits de Phomme et du citoyen “ (Perjanjian
                    hak-hak manusia dan warga negara) yang diumumkan pada tanggal 27 Agustus 1789 dan yang merupakan salah satu mata rantai dalam pertumbuhan pengertian tentang hak-hak manusia. Pada tanggal 1790 (14 Juli) UUD Perancis disahkan. UUD ini tidak
                    menghapuskan kerajaan tetapi membatasinya hingga merupakan Constituaten monarchie. Raja hanya punya veto yang dapat menunda keputusan tetapi tidak dapat membatalkan. Raja setuju dengan UUD dan bersumpah setia kepadanya. Tetapi sekonyong-konyong
                    ia melarikan diri, tertangkap oleh rakyat dan dikembalikan lagi ke Paris.</p>
            </p>
    
            <p>
                <h1>Pengaruh Revolusi Perancis di Dunia</h1>
                Revolusi Prancis telah mengilhami perjuangan bangsa-bangsa terjajah di Asia-Afrika termasuk Indonesia. Nasionalisme di Asia-Afrika, termasuk Indonesia muncul sebagai akibat dari penindasan yang dilakukan oleh negara-negara imperialisme Barat. Pelaksanaan
                politik etis telah memberikan kesempatan pendidikan kepada penduduk bumi putera walaupun dalam lingkup yang terbatas. Adanya pendidikan telah mendorong munculnya golongan baru, yaitu golongan terpelajar yang menjadi pelopor pergerakan nasional.
                Melalui pendidikan itu pula kaum terpelajar dapat mengikuti perkembangan pemikiran bangsa-bangsa Barat. Mereka mempelajari berbagai ide dan paham-paham baru yang berkembang di Eropa pada waktu itu, seperti liberalisme, demokrasi, dan nasionalisme.</p>
    
            <h1>Pengaruh Revolusi Prancis di Indonesia</h1>
            <p>
                Dalam masa pergerakan nasional azas-azas demokrasi seperti yang diperjuangkan oleh rakyat Prancis, di coba untuk digerakkan oleh kaum bumi putera. Pada 20 September 1939 Gabungan Politik Indonesia (GAPI) menyampaikan gagasannya yang dikenal dengan “manifestasi
                GAPI” yang isinya mengajak Indonesia dan Belanda untuk bekerja sama untuk menghadapi bahaya fasisme. Kerja sama itu akan berhasil apabila rakyat Indonesia diberikan suatu pemerintahan yang bertanggung jawab kepada parlemen yang dipilih rakyat.
                namun, upaya GAPI ini hanya ditanggapi dengan pembentukan Komisi Visman. Namun, komisi ini pun tidak mampu memberikan apa yang diperjuangkan oleh GAPI sampai akhirnya Indonesia jatuh ke tangan Jepang.
            </p>',
        ]);

        Sej11_Level::create([
            'gambar_utuh' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/19170704_Riot_on_Nevsky_prosp_Petrograd.jpg/240px-19170704_Riot_on_Nevsky_prosp_Petrograd.jpg',
            'judul_sub_bab' => 'Revolusi Russia',
            'materi' => '<p>Revolusi Rusia pada 1917 adalah sebuah gerakan politik di Rusia yang memuncak pada tahun 1917 dengan penggulingan pemerintahan provinsi yang telah mengganti sistem Tsar Rusia, dan menuju ke pendirian Uni Soviet, yang berakhir sampai keruntuhannya pada 1991.</p>

            <h2>Pemikiran yang Melandasi Revolusi Rusia</h2>
            <h3>I. Liberalisme</h3>
            <p>Pada permulaan abad XIX (masa sesudah Kongres Wina) keadaan Rusia masih sangat terbelakang jika dibandingkan dengan keadaan Eropa Barat. Masyarakat Rusia terbagi atas dua golongan saja, ialah : tuan tanah (bangsawan) dan petani (rakyat jelata). Industry belum ada dan karena itu belum ada kaum pertengahan (atau kaum borjuis). Rusia masih merupakan negara agraris yang kolot. Tidak adanya kaum pertengahan ini mempersukar masuknya liberialisme ke Rusia, karena lazimnya kaum pertengahanlah yang merupakan pendukung liberialisme. </p>
            <p>Keadaan masyarakat Rusia masih kolot. Dipandangan mata rakyat yang kolot itu Tsar Rusia lebih merupakan seorang dewa yang keramat. Bangsawan yang berdekatan dengan raja, mempunyai kedudukan yang istimewa di atas rakyat. Mereka merupakan tuan tanah besar yang mengekang hidup rakyat jelata sebagai petani. </p>
            <p>Rakyat jelata sebagian besar merupakan petani miskin yang tidak memiliki tanah sendiri, tetapi hanya mengerjakan tanah dari tuan tanah. Mereka diharuskan tunduk kepada segala kehendak tuan tanahnya dan tidak boleh pindah ke lain tempat (ke lain daerah). Terikat kepada tempat tinggalnya dan terpaksa tunduk kepada tuan tanahnya, petani merupakan budak belaka dari tuan tanahnya. Status petani sebagai budak dari tuan tanah ini memang status yang disahkan oleh pemerintah Rusia sejak Undang-Undang Perbudakan tahun 1646 dari Tsar Alexis I. walaupun pada tahun 1861 Tsar Alexander II menghapuskan perbudakan, hidup petani belum mengalami kemajuan yang nyata. Di dalam kebijakan penghapusan perbudakan ini (Undang-Undang Emansipasi), Tsar II menyatakan bahwa bekas budak mendapat tanah sebagai miliknya, tetapi sebagai milik bersama (kolektif) dari suatu desa (mir). Satu tanah desa dikepalai satu orang kepala mir (lurah desa). Lama kelamaan Mir ini bertindak sebagai tuan tanah saja terhadap petani anggota mir. Kepala mir akhirnya menjadi petani besar dan kaya yang disebut kulak. Hidup petani biasa tetap sengsara.</p>
            <p>Pada tahun 1906 dibawah pemerintahan Tsar Nicolas II oleh menteri Stolypin sistim mir dihapuskan. Tanah tidak lagi merupakan milik kolektif dari mir, tetapi diberikan kepada petani sebagai milik perseorangan. Tetapi perubahan agrarian dari menteri Stolypin agak terlambat diadakannya, karena ketika itu revolusi Rusia sudah mulai mendidih dan tindakan Stolypin itu oleh kaum revolusioner dianggap sebagai tanda kelemahan pemerintahan tsar (baru kalah dalam perang Rusia-Jepang 1905) dan tidak sebagai perbaikan nasib petani.</p>
            <p>Menyikapi kondisi Rusia yang semakin terpuruk, berkembang pemikiran liberal dikalangan pelajar Rusia, mereka Ingin membangun Rusia atas dasar konsepsi Barat. Menurut pendapatnya, Negara itu adalah badan politik belaka untuk mencapai kesejahteraan rakyat, dan karena politik itu adalah soal ratio, maka Negara harus disusun atas dasar ratio pula. Menurut pendapat mereka, Rusia merupakan sebagian dari dunia lainnya dan tidak sebagai Negara yang berdiri tersendiri lepas dari dunia lainnya, dan karena itu harus mengikuti jejak dunia lainnnya. Mereka berfaham internasional dan liberal.</p>
            
            <h3>II. Pan-Slavisme</h3>
            <p>Rakyat Rusia Ingin membangun Rusia atas dasar kultur Slavia. Menurut pendapatnya, Negara itu adalah badan moral. Dan karena moral bangsa Slavia terletak dalam agama Katholik –Yunani, maka Negara harus disusun menurut konsepsi agama Katholik-Yunani. Menurut pendapat mereka, pemerintahan Rusia yang terbaik adalah pemerintahan otokrasi, karena bentuk pemerintahan inilah yang sejak dulu selalu dipakai oleh bangsa Slavia. Aliran Slavia atau Slavophil ini merupakan pendekar dari faham otokrasi, orthodoxy dan nasionalisme. Slavophil inilah yang nanti menimbulkan gerakan Pan-Slavisme.</p>
            <p>Pan-Slavisme ialah gerakan untuk mempersatukan bangsa-bangsa Slavisme dan menjunjung tinggi kebudayaan Slavisme. Bangsa Slavia adalah bangsa Indo-Jerman. Pusat kedudukan mereka yang Pertama dikenal dalam sejarah ialah Ukraina dan sekitarnya. Mereka kemudian bergerak keutara sampai laut Timur (Laut Baltik), ke timur sampai Siberia, ke Selatan sampai Balkan, Laut Hitam, Laut Kaspia, dan ke Barat sampai di perbatasan Jerman. Termasuk bangsa Slavia ialah: bangsa Polandia, Tsjeeh, Slovak, Bohemia, Moravia (semua termasuk bangsa Slovia Barat), bangsa Rusia, Ukraina, Rumania, Bulgaria, (Bangsa Bulgaria Timur). Bangsa Slavia Barat beragama Roos-Katholik bangsa Slavia Timur dan Slavia Selatan beragama Katholik Yunani. Bangsa Slavia Barat berfaham Eropa Barat, bangsa Slavia Timur dan Slavia Selatan berfaham Eropa Timur. Disinilah letaknya rintangan yang terbesar dalam gerakan Pan-Slavisme.</p>
            
            <h3>III. Nihilisme</h3>
            <p>Nihilism adalah faham yang mengatakan bahwa masyarakat ini telah terlanjur rusak dan tidak mungkin lagi dapat diperbaiki, karena itu harus dilenyapkan sama sekali (nihil=nol=lenyap sama sekali). Kemudian setelah lenyap sama sekali, baru disusun masyarakat baru berdasarkan atas ratio.</p>
            
            <h3>IV. Anarkisme</h3>
            <p>Anarkisme / Anarchism adalah faham yang mengatakan bahwa masyarakat yang bahagia itu adalah masyarakat yang tidak berpemerintahan (anarchi=an-archi=tidak – pemerintah=tidak berpemerintahan). Pokok dari kebahagiaan adalah kebebasan . dalam masyarakat yang berpemerintahan orang belum bebas sama sekali, sebab pemerintah itu merupakan badan yang memaksa terhadap warga Negara. Karena itu pemerintah harus dilenyapkan. “ Dunia yang bahagia”. Kata Bakunin adalah dunia tanpa tuhan dan tanpa hukum.</p>
            
            <h3>V. Sosialisme dan Komunisme</h3>
            <p>Dengan timbulnya industry, timbullah golongan buruh (proletar) dan timbul pula gerakan sosialisme. Pemerintahan Nicholas II yang bermuka dua (reaksioner dalam politik, namun progresif dalam ekonomi) menimbulkan ketegangan di dalam negeri. Rekasionalisme politik tidak mengakui adanya hak-hak politik bagi rakyat, sebaliknya progresivisme ekonomi dengan industrialisasinya menciptakan golongan buruh yang menuntut hak-hak politik bagi rakyat. Ketegangan makin berkembang dengan semakin majunya industry, bertambahnya jumlah kaum buruh dan tetap tidak maunya Nichola II melepaskan politik reaksionernya. Revolusi tinggal soal waktu saja. Terorisme mulai timbul lagi pada tahun 1900.</p>
            <p>George Plekanov pada tahun 1898 mendirikan Partai Sosial-Demokrat dengan program yang moderat, ialah : persamaan dalam hokum, kemerdekaan pers, berbicara, berkumpul, dan perbaikan nasib buruh dan tani. Tujuan ini hendak dicapainya dengan jalan politik (indirect action) dan dengan jalan pemogokan (direct action).</p>
            <p>Tetapi sayap radikal dalam partai Sosial-Demokrat menghendaki direct action saja yang berupa revolusi. Pecahlah Partai Sosialis-Demokrat menjadi dua; Mensjewiki (sosial-demokrat ata dengan singkat boleh disebut sosial) dan Bolsjewiki (radikal-revolusioner, atau kelak disebut komunis).</p>
            <p>Perpecahan ini terjadi pada tahun 1903 dalam kongres partai-demokrat dari seluruh dunia di London. Mensjewiki dipimpin oleh George Plekhanov, kemudian oleh Kerensky dan Bolsjewiki dipimpin oleh Vladimir Ulyanov (terkenal dengan nama samarannya; Lenin), kemudian Josef Dschugaschvili (terkenal sebagai Stalin). Komunisme akan menghapuskan milik perseorangan dan menjelmakannya kembali menjadi milik kolektif, yaitu Negara</p>
            
            <h1>Revolusi Tahun 1917</h1>
            <h2>Penyebab Terjadinya Revolusi Rusia pada Tahun 1917</h2>
            <h3>1. Pemerintahan Tsar (Nicholas II) yang Reaksioner</h3>
            <p>Di zaman negara-negara lainnya mengakui hak-hak politik bagi warganegaranya, tsar masih saja segan atau tidak mau memberi hak-hak politik yang sungguh-sungguh kepada warganegaranya. Betul Duma diadakan tetapi tsar tidak pernah menghiraukannya. Pemilihannya pun adalah palsu karena mereka yang pro tsar yang dipilih duduk dalam Duma, hingga Duma lebih merupakan dewan penasihat tsar daripada dewan perwakilan rakyat yang sesungguhnya. </p>
            
            <h3>2. Susunan Pemerintahan Tsar yang Buruk </h3>
            <p>Pemerintahan tidak disusun secara rasional, tetapi atas dasar pavoritisme. Tsar tidak memilih orang-orang yang cakap untuk pemerintahannya, tetapi orang-orang yang disukainya. Dalam hal ini Nicholas II sangat dipengaruhi oleh Tsarina Alexandra, dan Alexandra dibawah pengaruh dari orang yang menyebut dirinya “utusan tuhan” yaitu Gregory Rasputin. Alexandara dan Rasputin adalah orang-orang yang sangat kolot dan benci terhadap segala macam faham baru.</p>
            
            <h3>3. Perbedaan Sosial yang Mencolok Mata </h3>
            <p>Tsar dengan bangsawan-bangsawan hidup mewah dan kaya raya. Rakyat terutama petani dan buruh hidup sangat miskin dan sengsara. Bangsawan memiliki semua hak, sementara rakyat jelata tidak mempunyai hak sama sekali. Meskipun perbudakan telah dihapuskan tetapi dalam hidup sehari-hari bangsawan memandang rakyat tidak lebih daripada budak mereka belaka.</p>
            
            <h3>4. Soal Tanah </h3>
            <p>Perubahan agrarian 1906 dari menteri Stolypin hanya menjelmakan tanah-tanah mir menjadi milik perseorangan dari anggota-anggota mir saja. Tetapi di luar mir itu masih terdapat tanah-tanah yang luas sekali dari tuan-tuan tanah besar, yaitu bangsawan-bangsawan dan kulak-kulak (petani-petani besar). Tanah-tanah ini dipekerjakan oleh petani-petani kecil sebagai pekerja-pekerja. Mereka inilah yang menuntut tanah sebagai miliknya.</p>
            
            <h3>5. Aliran-Aliran yang Menentang Tsar</h3>
            <p>Dalam revolusi 1905, aliran-aliran yang menentang tsar dapat ditindas tetapi tidak lenyap. Mereka bergerak secara gelap dan mengumpulkan kekuatan mereka kembali sambil menunggu kesempatan untuk timbul kembali. Aliran-aliran yang menentang tsar ini ialah: </p>
            <p>a. Kaum liberal (disebut kadet = konstitusionil democrat) menghendaki kerajaan yang berundang-undang</p>
            <p>b. Kaum sosialis menghendaki susunan masyarakat yang sosialistis dan pemerintahan yang modern dan demokratis. Kaum sosialis merupakan anasir yang revolusioner dan terbagi atas dua aliran: Mesjewiki (moderat, atau sosial-demokrat) dan Besjewiki (radikal, kelak dikenal dengan komunis). Pemimpin Mensjewiki ialah Kerensky, dan pemimpin Bolsjewiki ialah Lenin dan Trotsky.</p>
            
            <h3>6. Kekalahan Perang </h3>
            <p>Ketika Rusia masuk Perang Dunia I, maka sebenarnya Rusia tidak mempunyai tujuan perang yang tertentu. Rusia ikut perang karena terikat dan terseret oleh perjanjian-perjanjiannya dengan Negara-negara lain., terutama oleh Triple Entente. Karena itu ikut serta Rusia dalam Perang Dunia I tidak mendapat sambutan rakyat yang hangat. Dan perang yang tidak dapat backing rakyat sukar mendapatkan kemenangan. Kekalahan-kekalahan Rusia yang besar (Tanneberg, danau-danau Masuri) mengecewakan hati rakyat dan lenyaplah kepercayaan terhadap tsar. Akhirnya rakyat jemu melihat perang, mereka ingin damai.</p>
            
            <h3>7. Bahaya Kelaparan Mengancam</h3>
            <p>Lima belas juta orang dimobilisir untuk perang. Timbullah kekurangan tenaga kerja baik dalam industri maupun dalam pertanian. Lima belas juta tentara harus dijamin penuh. Timbullah kekurangan bahan makanan . ekonomi Negara kacau dan bahaya kelaparan mengancam Rusia. Revolusi telah diambang pintu.</p>
            
            <h2>Jalannya Revolusi</h2>
            <p>Revolusi tahun 1917 dapat dibagi dalam dua fase yaitu Revolusi Februari 1917 (fase pertama) dan Revolusi Oktober 1917 (fase kedua).</p>
            
            <h3>I. Revolusi Februari (23 Februari – 3 Maret 1917)</h3>
            <p>Kadet, Mensjewiki menggulingkan tsar. Revolusi dimulai di Leningrad. Para demonstran menunut bahan makanan, kemudian diikuti oleh pemogokan di perusahaan-perusahaan. Tentara yang diperintahkan menembaki pemogokan berbalik memblokir dan menembaki opsir-opsirnya sendiri. Revolusi meletus. Sar ditawan dan dipaksa turun tahta. Pemerintahan sementara dibentuk. Kaum kadet memegang pimpinan. Tetapi kaum kadet tidak mengadakan perubahan-perubahan seperti yang dituntut oleh rakyat, karena takut bahwa perubahan-perubahan itu hanya akan menambah kekacauan.</p>
            <p>Kaum Mensjewiki dibawah Kerensky menggulingkan kaum kadet dan memegang pimpinan pemerintahan. Program kaum Menjsewiki adalah : “ pertama-tama menjunjung kembali kehormatan Rusia (telah merosot karena kekalahan-kekalahan perang) kemudian baru mengadakan perubahan-perubahan pemerintahan dalam negeri. Segera bentuk Republik diumumkan bagi Rusia (1917)”. Serangan besar-besaran dilangsungkan terhadap Jerman, tetapi gagal sama sekali. Rakyat yang telah jemu perang, kehilangan kepercayaannya terhadap pemerintahan Mensjewiki. Segera kaum Bolsjewiki tampil ke muka dan menjanjikan kepada rakyat : keadaan yang damai, bahan makan, pembagian tanah.</p>
            
            <h3>II. Revolusi Oktober (25 Oktober 1917)</h3>
            <p>Bosjewiki menggulingkan Menjewiki. Pada tahun 1917 (April) Lenin kembali ke Rusia dari perantauannya (sejak 1907) di Jerman, Perancis, Inggris, Austria, Swiss. Pada tahun itu juga tiba di Rusia Leon Trorski (sebenarnya Bronstein) dari Amerika. Dua orang ini akan memimpin gerakan komunis (Bosjewiki) di Rusia.</p>
            <p>Diam-diam kaum Bonsjewiki mengadakan persiapan-persiapan untuk menimbulkan Revolusi Bolsjewiki. Mereka membentuk pemerintahan sendiri, tentara sendiri (pasukan merah) dan menyebarkan propaganda anti-pemerintahan-borjuis. Ketika pemerintah Mensjewiki (Kerensky) kehilangan kepercayaan rakyat (karena gagalnya serangan besar-besaran) maka kaum Bolsjewiki lekas-lekas memeluk rakyat dan menganjurkan petani-petani membagi-bagi tanah dan kaum buruh menyita pabrik-pabrik. Dengan sekaligus mereka mendapatkan simpati dan backing dari rakyat. Tibalah waktunya untuk meletuskan revolusi. Revolusi dimulai dari Petrograd lagi, tentara dan angkatan laut di Petrograd memihak Lenin dan kemudian juga tentara-tentara di front. Pada tanggal 25 Oktober 1917 pemerintahan Mensjewiki (Kerensky) digulingkan dan Bolsjewiki (Lenin) memegang pemerintahan. Segera diadakan perubahan-perubahan yang besar;</p>
            <p>1. Perundingan perdamaian dengan Jerman dimulai dan akhirnya menciptakan “perjanjian Perdamaian Brest Litowsk (1918)” </p>
            <p>2. Segala hutang dari pemerintahan tsar dihapuskan dan bank menjadi monopoli negara.</p>
            <p>3. Tanah dibagi-bagikan kepada petani dan buruh menyita pabrik-pabrik</p>
            <p>4. Bahan makanan dikerahkan dan dibagi-bagikan kepada rakyat Revolusi berjalan dan berhasil baik dan kaum Belsjewiki (Lenin) erat-erat memegang pemerintahan yang telah digenggamannya.</p>
            
            <h2>Pengaruh Revolusi Rusia di Dunia</h2>
            <p>Revolusi yang terjadi di Rusia telah membawa perubahan besar terhadap ideologi yang berkembang di dunia. Sejak saat itu komunis di Eropa dikendalikan oleh Rusia. Mereka terus berusaha menyebarkan pahamnya. Akibatnya terjadi Persaingan dengan ideologi lain, yaitu dengan paham demokrasi liberal. Persaingan antar paham komunis dengan paham demokrasi liberal menyebabkan terjadinya Perang Dingin.</p>
            
            <h2>Pengaruh Revolusi Rusia di Indonesia</h2>
            <p>Di Indonesia Reformasi di Rusia telah menyebabkan masuknya pengaruh Marxisme dan komunis di Indonesia. Diawali dengan pembentukan ISDV pengaruh Marxisme dan komunis mempengaruhi kaum terpelajar. ISDV yang kemudian mengubah nama menjadi Partai Komunis Hindia dan kemudian berubah menjadi Partai Komunis Indonesia (PKI). </p>
            <p>PKI merupakan partai yang bersikap radikal dengan enggan bekerjasama dengan pemerintah. Pada tahun 1927 PKI melakukan perlawanan terhadap pemerintah Hindia Belanda, tetapi upaya ini gagal. PKI merupakan partai yang bersikap keras dan tidak segan-segan berdemonstrasi dan melakukan teror terhadap rakyat yang dianggap tidak sejalan dengan ideologinya. Ketika Indonesia merdeka, pada 18 September 1948 PKI melancarkan pemberontakannya di Madiun namun berhasil ditumpas oleh TNI. Upaya yang sama kemudian terulang kembali pada 30 September 1965 dengan adanya peristiwa G-30-S/PKI</p>',
        ]);

        //soal level 1, ini id nya ngurut dari 1 sampe 10. nnti di level 2 id soalnya mulai dari 11 sampe 20 dan begitu seterusnya
        
        
        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'soal' => "Kapan Perang Dunia ke 1 dimulai?",
            'potongan_gambar' => "piece01.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'soal' => "Apa penyebab terjadinya Perang Dunia ke 1?",
            'potongan_gambar' => "piece02.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'soal' => "Terdapat dua kubu yang saling berlawanan saat Perang Dunia ke 1 dimulai, apa sebutan / nama kedua kubu tersebut?",
            'potongan_gambar' => "piece03.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 1,
            'soal' => "Jerman dan Rusia saling bermusuhan menjelang Perang Dunia I karena",
            'potongan_gambar' => "piece04.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'soal' => "Perang dunia I terkenal akan adanya perang parit, dimana para tentara berlindung di dalam parit untuk menunggu musuh datang atau sekedar mempertahankan garis wilayah, salah satu pertempuran parit terbesar di Perang Dunia I adalah ",
            'potongan_gambar' => "piece05.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'soal' => "Salah satu tindak kejahatan di Perang Dunia I dengan tujuan untuk memusnahkan Sebagian atau keseluruhan etnis, kelompok dan golongan disebut",
            'potongan_gambar' => "piece06.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'soal' => "Pada saat penyerangan Jerman ke Front Barat, terdapat dua negara yang di invasi Jerman terlebih dahulu, kedua negara tersebut adalah",
            'potongan_gambar' => null,
        ]);
        
        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,
            'soal' => "Siapakah yang memimpin Revolusi Russia saat Perang Dunia ke 1 berlangsung",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,

            'soal' => "Amerika Serikat menyatakan perang terhadap Jerman karena",

            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 1,
            'sej11_waktu_id' => 2,

            'soal' => "Salah satu perjanjian perdamaian antara negara-negara pihak Sekutu dan Jerman adalah Perjanjian Versailles, pada tahun berapa perjanjian tersebut ditandatangani",

            'potongan_gambar' => null,
        ]);

        //level 2
        //Perang Dunia II

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 3,
            'soal' => "Pasca Perang Dunia II, sebagai salah satu dampak dan pengaruh dari terjadinya perang, banyak negara di Asia dan Afrika yang mendapatkan momentum untuk memerdekakan diri dari penjajah, proses ini seringkali disebut juga...",
            'potongan_gambar' => "piece01_l2.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 1,
            'soal' => "Perang Dunia II dimulai ketika Jerman pada 1 September 1939 menyerbu negara ...",
            'potongan_gambar' => "piece02_l2.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 3,
            'soal' => "Salah satu faktor yang mendorong terjadinya Perang Dunia II adalah gagalnya kebijakan Appeasement yang dilakukan oleh Inggris dan Perancis terhadap Jerman antara lain dalam kasus...",
            'potongan_gambar' => "piece03_l2.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 2,
            'soal' => "Perang Dunia II merupakan perang antara negara-negara yang berhaluan fasis melawan negara-negara sekutu, yang termasuk negara-negara berhaluan fasis pada Perang Dunia II adalah...",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 2,
            'soal' => "Piagam San Francisco yang ditandatangani pada tahun 1945 seakan mendeklarasikan sekaligus 50 anggota asli PBB, latar belakang anggota asli PBB berjumlah 50 negara tersebut adalah...",
            'potongan_gambar' => "piece04_l2.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 1,
            'soal' => "Perang Pasifik Raya antara Jepang dan Amerika Serikat yang terjadi sejak tahun 1941 hingga 1945 dimulai semenjak terjadinya peristiwa...",
            'potongan_gambar' => "piece05_l2.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 3,
            'soal' => "1) Tidak melakukan perluasan antarnegara
            2) Menjaga hak setiap bangsa dalam pemerintahan
            3) Mengakui hak semua negara dalam kerjasama ekonomi
            4) Wajib menjaga keutuhan dan kedaulatan bangsa
            5) PBB merupakan organisasi yang dibutuhkan dalam menjaga kedamaian dunia
            Berdasarkan data di atas, yang termasuk dalam poin-poin Piagam Atlantik ditunjukan oleh nomor...",
            'potongan_gambar' => "piece06_l2.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 3,
            'soal' => "1. Fasisme
            2. Liberalisme
            3. Komunisme
            4. Nasionalisme
            5. Pan Islamisme
            Berdasarkan data di atas, paham-paham besar yang berkembang pasca PD II adalah...",
            'potongan_gambar' =>null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 3,
            'soal' => "1. LBB gagal menjalankan tugasnya
            2. Munculnya paham Ultranasionalisme
            3. Jerman mengingkari perjanjian Versailles
            4. Inggris dan Prancis menyerbu Jerman
            5. Amerika membentuk North Atlantic Treaty Organization (NATO)
            Berdasarkan pernyataan tersebut, yang merupakan penyebab umum dari terjadinya Perang dunia II ditunjukan oleh nomor...",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 2,
            'sej11_waktu_id' => 3,
            'soal' => "1. Berdirinya PBB sebagai upaya memelihara perdamaian dunia
            2. Diterapkan ekonomi campuran di negara-negara yang baru merdeka
            3. Perebutan hegemoni kekuasaan negara Liberal dan negara Komunis
            4. Austria-Hongaria terbagi menjadi Austria, Hongaria, Cekoslovakia, dan Yugoslavia
            5. Hancurnya 4 kekaisaran besar di Eropa yaitu Jerman, Austria-Hongaria, Rusia, dan Turki
            Berdasarkan data di atas yang merupakan dampak dari PD II bagi dunia 
            Internasional adalah...",
            'potongan_gambar' =>null,
        ]);

        //level 3
        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 3,
            'soal' => "Pada tahun 1674 Inggris merebut Nieuw Amsterdam yang kemudian mengganti namanya menjadi New York. Dalam perang tujuh tahun, Inggris merebut dari Perancis daerah Canada dan Louisiana dibeli dari Perancis pada tahun 1803. Florida dibeli dari Spanyol tahun 1819. California diambil dari Mexico 1848. Alaska dibeli dari Rusia tahun 1867. Jika dilihat dari data di atas, maka diketahui bahwa sebagian besar wilayah Amerika telah dikuasai oleh negara...",
            'potongan_gambar' => "piece01_l3.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 2,
            'soal' => "Inggris memerintahkan bahwa hasil bumi Amerika (tembakau, gula, kapas) hanya boleh dijual kepada Inggris dan Amerika hanya diperbolehkan membeli barang-barang kebutuhannya dari Inggris saja. Dampak negatif dari Kondisi perdagangan seperti ini adalah...",
            'potongan_gambar' => "piece02_l3.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 1,
            'soal' => "Protes penduduk koloni Amerika terhadap pelaksanaan penarikan pajak oleh Inggris yang dipimpin oleh...",
            'potongan_gambar' => "piece03_l3.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 1,
            'soal' => "Pada abad ke-17 terjadi perebutan wilayah Amerika Utara oleh tiga negara, tiga negara tersebut adalah...",
            'potongan_gambar' => "piece04_l3.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 2,
            'soal' => "Pada tahun 1773, terdapat 3 kapal Inggris yang mengangkut teh untuk Amerika. Karena teh tersebut, Amerika harus membayar pajak kepada Inggris. Hal tersebut berlanjut pada pembuangan teh Inggris oleh pihak Amerika, singkat cerita Inggris dan Amerika melakukan perang. Insiden perang tersebut dikenal dengan nama...",
            'potongan_gambar' => "piece05_l3.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 1,
            'soal' => "Dimana pertempuran pertama Revolusi Amerika terjadi?",
            'potongan_gambar' =>null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 1,
            'soal' => "Negara manakah yang membeli Alaska pada tahun 1867?",
            'potongan_gambar' => "piece06_l3.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 1,
            'soal' => "Siapakah orang yang ditunjuk sebagai presiden pertama Amerika Serikat?",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 2,
            'soal' => "Terdapat dua pemikiran yang melandasi Revolusi Amerika, yaitu...",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 3,
            'sej11_waktu_id' => 1,
            'soal' => "Perjanjian perdamaian antara Inggris dan Perancis diadakan pada tahun...",
            'potongan_gambar' => null,
        ]);

        //level 4
        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 3,
            'soal' => "1) Kenangan kejayaan masa lampau
            2) Penderitaan akibat penajajahan
            3) Munculnya golongan terpelajar
            4) Kemenangan Jepang atas Rusia, 1905
            5) Masuknya faham liberal
            Yang merupakan faktor internal pendorong lahirnya nasionalisme di Indonesia adalah...",
            'potongan_gambar' => "piece01_l4.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 2,
            'soal' => "Di dalam perjanjian Renville, wilayah Indonesia yang diakui Belanda hanya Sumatera, Jawa Tengah dan Jogjakarta. Daerah Jawa Barat, Madura, dan Jawa Timur tidak lagi menjadi milik RI karena...",
            'potongan_gambar' => "piece02_l4.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 1,
            'soal' => "Di Indonesia semangat Reformasi Amerika mempengaruhi pergerakan nasional di Indonesia, yaitu...",
            'potongan_gambar' => "piece03_l4.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 1,
            'soal' => "Pengaruh Revolusi Perancis terhadap perkembangan sejarah Indonesia adalah sebagai berikut...",
            'potongan_gambar' => "piece04_l4.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 1,
            'soal' => "Nilai-nilai yang dapat diambil oleh bangsa Indonesia dengan terjadinya revolusi di berbagai negara di Eropa dan Amerika adalah...",
            'potongan_gambar' => "piece05_l4.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 1,
            'soal' => "Peristiwa yang terjadi pada masa perjuangan mempertahankan kemerdekaan dan dijadikan sebagai hari Pahlawan adalah peristiwa...",
            'potongan_gambar' => "piece06_l4.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 3,
            'soal' => "1) Pemerintah Belanda mengakui kekuasaan de facto RI atas Sumatera, Jawa, dan Madura.
            2) Seluruh pasukan TNI harus keluar dari daerah yang telah dikuasi Belanda
            3) Akan dibentuknya Negara Indonesia Serikat yang meliputi seluruh wilayah Hindia-Belanda
            4) Akan dibentuk Uni Indonesia-Belanda yang diketuai oleh Belanda
            5) Masalah Irian Barat akan dibicarakan kembali satu tahun setelah perjanjian
            Dari data di atas, yang merupakan isi perjanjian Linggar Jati adalah...",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 1,
            'soal' => "Sebelum mengikuti KMB (Konferensi Meja Bundar), Indonesia melaksanakan konferensi lain yang bernama...",
            'potongan_gambar' =>null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 1,
            'soal' => "Kapan Konferensi Meja Bundar diadakan?",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 4,
            'sej11_waktu_id' => 1,
            'soal' => "Dimana Konferensi Meja Bundar diadakan?",
            'potongan_gambar' => null,
        ]);

        //level 5
        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 2,
            'soal' => "Pada Juli 1789, rakyat Perancis menyerbu dan menguasai penjara Bastille. Penyerbuan terhadap penjara Bastille ini menjadi simbol berakhirnya absolute monarchi di Perancis, karena...",
            'potongan_gambar' => "piece01_l5.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 3,
            'soal' => "Tahun 1789 Revolusi Perancis berhasil menumbangkan absolut Monarchi dan menjadi Constituante monarchi serta digantikan Republik pada tahun 1792. Pada tahun 1799 rakyat menginginkan kembali absolutism dengan memuja Napoleon Bonaperte sebagai Kaisar Perancis dengan alasan...",
            'potongan_gambar' => "piece02_l5.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 1,
            'soal' => "Pengaruh perang kemerdekaan Amerika dari Inggris memberikan pengaruh kepada rakyat Perancis, yaitu...",
            'potongan_gambar' => "piece03_l5.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 1,
            'soal' => "Semboyan bangsa Perancis yang masuk dan berkembang di kalangan rakyat Hindia Belanda adalah...",
            'potongan_gambar' => "piece04_l5.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 1,
            'soal' => "Pemerintahan terror pada masa Revolusi Perancis dipimpin oleh...",
            'potongan_gambar' => "piece05_l5.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 1,
            'soal' => "Sebab Khusus terjadinya Revolusi Perancis adalah...",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 1,
            'soal' => "Revolusi Perancis terjadi pada tahun...",
            'potongan_gambar' => "piece06_l5.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 1,
            'soal' => "Siapakah nama tokoh romantisme yang berpengaruh pada Revolusi Perancis?",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 1,
            'soal' => "Kapan rakyat Perancis menyerbu dan merebut benteng Bastille?",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 5,
            'sej11_waktu_id' => 2,
            'soal' => "Feodalisme membagi-bagi masyarakat dalam golongan-golongan yang berhak dan yang tidak berhak. Di Perancis ketika terdapat beberapa golongan, pada golongan berapakah kaum agama berada?",
            'potongan_gambar' =>null,
        ]);

        //level 6
        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 2,
            'soal' => "Pelopor terjadinya Revolusi Februari 1917 di Rusia yang berhasil menggulingkan kekuasaan Tsar Nicholas II adalah...",
            'potongan_gambar' => "piece01_l6.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 1,
            'soal' => "Politik luar negeri Rusia yang terkenal adalah...",
            'potongan_gambar' => "piece02_l6.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 1,
            'soal' => "Sebelum Revolusi Rusia meletus, muncul aliran-aliran yang menentang kekuasaan Tsar, salah satu aliran itu adalah...",
            'potongan_gambar' => "piece03_l6.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 1,
            'soal' => "Pengaruh Revolusi Rusia di bidang ideologi adalah...",
            'potongan_gambar' => "piece04_l6.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 1,
            'soal' => "Akibat Revolusi Rusia bagi dunia antara lain sebagai berikut, kecuali...",
            'potongan_gambar' => "piece05_l6.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 2,
            'soal' => "Faham yang mengatakan bahwa masyarakat ini telah terlanjur rusak dan tidak mungkin lagi dapat diperbaiki, karena itu harus dilenyapkan sama sekali. Kemudian setelah lenyap sama sekali, baru disusun masyarakat baru berdasarkan atas ratio. Pernyataan tersebut merupakan makna dari...",
            'potongan_gambar' => "piece06_l6.png",
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 1,
            'soal' => "Kapan Revolusi Februari dimulai?",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 1,
            'soal' => "Dimana Revolusi Oktober dimulai?",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 1,
            'soal' => "Salah satu pengaruh Revolusi Rusia di dunia adalah terjadinya persaingan antar paham komunis dengan paham demokrasi liberal menyebabkan terjadinya...",
            'potongan_gambar' => null,
        ]);

        sej11_soal::create([
            'sej11__level_id' => 6,
            'sej11_waktu_id' => 1,
            'soal' => "Pelopor terjadinya Revolusi Oktober 1917 di Rusia yang berhasil menggulingkan kekuasaan Mensjewiki adalah...",
            'potongan_gambar' => null
        ]);

        
        //opsi 
        //level 1 

        // 1. Kapan Perang Dunia ke 1 dimulai? d
        // a. 24 Juli 1914
        // b. 27 Juli 1919
        // c. 24 Juni 1914
        // d. 28 Juli 1914
        // e. 28 Juni 1914
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

        // 2. Apa penyebab terjadinya Perang Dunia ke 1? a
        // a. Pembunuhan Adipati Agung Franz Ferdinand
        // b. Terdapat persaingan industri dan teknologi antara Jerman dan Rusia
        // c. Adanya perbedaan ideologi antar negara
        // d. Invasi Jerman ke Rusia
        // e. Krisis ekonomi di berbagai negara

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

        // 3. Terdapat dua kubu yang saling berlawanan saat Perang Dunia ke 1 dimulai,
        // apa sebutan/nama kedua kubu tersebut? a
        // a. Blok Sekutu dan Blok Sentral
        // b. Blok Serikat dan Blok Eropa
        // c. Jerman dan Amerika
        // d. Blok Selatan dan Blok Timur
        // e. Nasionalis dan Imperalis

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
            'opsi_pg' => "Adanya gencatan senjata yang dilakukan oleh Jerman",
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

        //level 2
        // 1. Pasca Perang Dunia II, sebagai salah satu dampak dan pengaruh dari terjadinya perang, 
        // banyak negara di Asia dan Afrika yang mendapatkan momentum untuk memerdekakan diri dari 
        // penjajah, proses ini seringkali disebut juga...
        // a. Antikolonisasi
        // b. Independesi
        // c. Rekolonisasi
        // d. Dekolonisasi (jawaban)
        // e. Repatriasi
        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Antikolonisasi",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Independesi",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Rekolonisasi",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Dekolonisasi",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 11,
            'opsi_pg' => "Repatriasi",
            'status_benar' => 0,
        ]);

        // 2. Perang Dunia II dimulai ketika Jerman pada 1 September 1939 menyerbu negara ...
        // a. Polandia (jawaban)
        // b. Rusia
        // c. Austria
        // d. Ceko
        // e. Perancis

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Polandia",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Austria",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Ceko",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 12,
            'opsi_pg' => "Perancis",
            'status_benar' => 0,
        ]);

        // 3. Salah satu faktor yang mendorong terjadinya Perang Dunia II adalah gagalnya
        // kebijakan Appeasement yang dilakukan oleh Inggris dan Perancis terhadap Jerman
        // antara lain dalam kasus...
        // A. pendudukan Jerman atas Polandia
        //B. pendudukan Jerman atas Spanyol
        //C. pelanggaran HAM yang terjadi di negara Austria-Hongaria
        //D. pendudukan Jerman atas wilayah Sudetenland (jawaban)
        //E. operasi Barbarossa ke Uni Soviet 


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "pendudukan Jerman atas Polandia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "pendudukan Jerman atas Spanyol",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "pelanggaran HAM yang terjadi di negara Austria-Hongaria",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "pendudukan Jerman atas wilayah Sudetenland",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 13,
            'opsi_pg' => "operasi Barbarossa ke Uni Soviet",
            'status_benar' => 0,
        ]);

        // 4. Perang Dunia II merupakan perang antara negara-negara yang berhaluan fasis 
        // melawan negara-negara sekutu, yang termasuk negara-negara berhaluan fasis pada 
        // Perang Dunia II adalah...
        // A. Jerman, Perancis, Austria-Hongaria
        //B. Perancis, Spanyol, Inggris 
        //C. Inggris, Perancis, Rusia
        //D. Jepang, Italia, Jerman (jawaban)
        //E. Italia, Jerman, Rusia 


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Jerman, Perancis, Austria-Hongaria",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Perancis, Spanyol, Inggris ",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Inggris, Perancis, Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Jepang, Italia, Jerman",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 14,
            'opsi_pg' => "Italia, Jerman, Rusia",
            'status_benar' => 0,
        ]);

        // 5. Piagam San Francisco yang ditandatangani pada tahun 1945 seakan mendeklarasikan sekaligus 
        // 50 anggota asli PBB, latar belakang anggota asli PBB berjumlah 50 negara tersebut adalah...
        // A. Negara penyumbang dana terbesar dalam PBB
        // B. Negara yang hadir dalam penandatanganan perjanjian San Fransisco
        // C. Negara di dunia pada saat itu hanya berjumlah 50 buah (jawaban)
        // D. Negara tersebut sekutu dari Amerika Serikat 
        // E. Sesuai kesepakatan antara Amerika, Inggris dan Perancis


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Negara penyumbang dana terbesar dalam PBB",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Negara yang hadir dalam penandatanganan perjanjian San Fransisco",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Negara di dunia pada saat itu hanya berjumlah 50 buah",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Negara tersebut sekutu dari Amerika Serikat",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 15,
            'opsi_pg' => "Sesuai kesepakatan antara Amerika, Inggris dan Perancis",
            'status_benar' => 0,
        ]);

        // 6. Perang Pasifik Raya antara Jepang dan Amerika Serikat yang terjadi sejak tahun 1941 
        // hingga 1945 dimulai semenjak terjadinya peristiwa...
        // A. Pemboman pulau onigashima oleh sekutu 
        // B. Perebutan pulau sakhalin 
        // C. Diserbunya Manchuria oleh Jepang 
        // D. Serangan terhadap Pearl Harbour, Hawaii (jawaban)
        // E. Direbutnya Hong Kong, Shanghai dan Macau dari tangan sekutu oleh Jepang


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 16,
            'opsi_pg' => "Pemboman pulau onigashima oleh sekutu ",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 16,
            'opsi_pg' => "Perebutan pulau sakhalin ",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 16,
            'opsi_pg' => "Diserbunya Manchuria oleh Jepang ",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 16,
            'opsi_pg' => "Serangan terhadap Pearl Harbour, Hawaii",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 16,
            'opsi_pg' => "Direbutnya Hong Kong, Shanghai dan Macau dari tangan sekutu oleh Jepang",
            'status_benar' => 0,
        ]);

        // 7. 
        // 1) Tidak melakukan perluasan antarnegara
        //2) Menjaga hak setiap bangsa dalam pemerintahan
        //3) Mengakui hak semua negara dalam kerjasama ekonomi
        //4) Wajib menjaga keutuhan dan kedaulatan bangsa
        //5) PBB merupakan organisasi yang dibutuhkan dalam menjaga kedamaian dunia
        // A. 1, 2 Dan 3 (jawaban)
        //B. 1, 2 Dan 4
        //C. 2, 3 Dan 4
        //D. 2, 3 Dan 5
        //E. 3, 4 Dan 5


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 17,
            'opsi_pg' => "1, 2 Dan 3",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 17,
            'opsi_pg' => "1, 2 Dan 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 17,
            'opsi_pg' => "2, 3 Dan 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 17,
            'opsi_pg' => "2, 3 Dan 5",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 17,
            'opsi_pg' => "3, 4 Dan 5",
            'status_benar' => 0,
        ]);

        // 8. 
        // 1) Fasisme
        // 2) Liberalisme
        // 3) Komunisme
        // 4) Nasionalisme
        // 5) Pan Islamisme
        // Berdasarkan data di atas, paham-paham besar yang berkembang pasca PD II adalah...
        // A. 1, 2 dan 3
        //B. 1, 2 dan 4
        //C. 2, 3 dan 4
        //D. 2, 3 dan 5
        //E. 3, 4 dan 5 (jawaban)


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 18,
            'opsi_pg' => "1, 2 dan 3",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 18,
            'opsi_pg' => "1, 2 dan 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 18,
            'opsi_pg' => "2, 3 dan 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 18,
            'opsi_pg' => "2, 3 dan 5",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 18,
            'opsi_pg' => "3, 4 dan 5",
            'status_benar' => 1,
        ]);

        // 9.
        // 1) LBB gagal menjalankan tugasnya
        // 2) Munculnya paham Ultranasionalisme
        // 3) Jerman mengingkari perjanjian Versailles
        // 4) Inggris dan Prancis menyerbu Jerman
        // 5) Amerika membentuk North Atlantic Treaty Organization (NATO)
        // Berdasarkan pernyataan tersebut, yang merupakan penyebab umum dari terjadinya Perang Dunia II 
        // ditunjukan oleh nomor...
        // A. 1, 2, dan 3 (jawaban)
        //B. 1, 2, dan 4
        //C. 2, 3, dan 4
        //D. 2, 3, dan 5
        //E. 3, 4, dan 5


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 19,
            'opsi_pg' => "1, 2, dan 3",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 19,
            'opsi_pg' => "1, 2, dan 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 19,
            'opsi_pg' => "2, 3, dan 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 19,
            'opsi_pg' => "2, 3, dan 5",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 19,
            'opsi_pg' => "3, 4, dan 5",
            'status_benar' => 0,
        ]);

        // 10. 
        // 1) Berdirinya PBB sebagai upaya memelihara perdamaian dunia
        // 2) Diterapkan ekonomi campuran di negara-negara yang baru merdeka
        // 3) Perebutan hegemoni kekuasaan negara Liberal dan negara Komunis
        // 4) Austria-Hongaria terbagi menjadi Austria, Hongaria, Cekoslovakia, dan Yugoslavia
        // 5) Hancurnya 4 kekaisaran besar di Eropa yaitu Jerman, Austria-Hongaria, Rusia, dan Turki
        // Berdasarkan data di atas yang merupakan dampak dari PD II bagi dunia 
        // Internasional adalah...
        // A. 1, 2 dan 3 (jawaban)
        //B. 1, 2 dan 4
        //C. 2, 3 dan 4
        //D. 2, 3 dan 5
        //E. 3, 4 dan 5


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 20,
            'opsi_pg' => "1, 2 dan 3",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 20,
            'opsi_pg' => "1, 2 dan 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 20,
            'opsi_pg' => "2, 3 dan 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 20,
            'opsi_pg' => "2, 3 dan 5",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 20,
            'opsi_pg' => "3, 4 dan 5",
            'status_benar' => 0,
        ]);

        //level 3
        // 1. Pada tahun 1674 Inggris merebut Nieuw Amsterdam yang kemudian mengganti namanya menjadi New York. 
        // Dalam perang tujuh tahun, Inggris merebut dari Perancis daerah Canada dan Louisiana dibeli dari 
        // Perancis pada tahun 1803. Florida dibeli dari Spanyol tahun 1819. California diambil dari Mexico 1848.
        // Alaska dibeli dari Rusia tahun 1867. Jika dilihat dari data di atas, maka diketahui bahwa sebagian besar
        // wilayah Amerika telah dikuasai oleh negara...
        // A. Perancis
        //B. Belanda
        //C. Inggris (jawaban)
        //D. Rusia
        //E. Spanyol

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 21,
            'opsi_pg' => "Perancis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 21,
            'opsi_pg' => "Belanda",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 21,
            'opsi_pg' => "Inggris",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 21,
            'opsi_pg' => "Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 21,
            'opsi_pg' => "Spanyol",
            'status_benar' => 0,
        ]);

        // 2. Inggris memerintahkan bahwa hasil bumi Amerika (tembakau, gula, kapas) hanya boleh dijual 
        // kepada Inggris dan Amerika hanya diperbolehkan membeli barang-barang kebutuhannya dari Inggris saja. 
        // Dampak negatif dari Kondisi perdagangan seperti ini adalah...
        // A. Akan ada over produksi pertanian asli Amerika
        //B. Produksi pertanian akan menjadi primadona dibandingkan dengan produksi barang tambang Amerika
        //C. Inggris menguasai dan mempermainkan harga barang yang diperjual belikan (jawaban)
        //D. Tidak ada investor asing lainnya di Amerika selain Perancis, Belanda, dan Spanyol
        //E. Ekonomi Amerika merosot tajam


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 22,
            'opsi_pg' => "Akan ada over produksi pertanian asli Amerika",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 22,
            'opsi_pg' => "Produksi pertanian asing menjadi primadona",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 22,
            'opsi_pg' => "Inggris menguasai dan mempermainkan harga barang yang diperjual belikan",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 22,
            'opsi_pg' => "Tidak ada investor asing lainnya di Amerika selain Perancis, Belanda, dan Spanyol",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 22,
            'opsi_pg' => "Ekonomi Amerika merosot tajam",
            'status_benar' => 0,
        ]);

        // 3. Protes penduduk koloni Amerika terhadap pelaksanaan penarikan pajak oleh Inggris yang dipimpin oleh...
        // A. Samuel Adam (jawaban)
        // B. John Smith
        // C. John Hancock
        // D. John Adam
        // E. George Greenville


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 23,
            'opsi_pg' => "Samuel Adam",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 23,
            'opsi_pg' => "John Smith",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 23,
            'opsi_pg' => "John Hancock",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 23,
            'opsi_pg' => "John Adam",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 23,
            'opsi_pg' => "George Greenville",
            'status_benar' => 0,
        ]);

        // 4. Pada abad ke-17 terjadi perebutan wilayah Amerika Utara oleh tiga negara, tiga negara tersebut adalah...
        // A. Perancis, Inggris, Belanda (jawaban)
        //B. Portugis, Spanyol, Moor
        //C. Arab, Turki, Tatar
        //D. Jerman, Norwegia, Skotlandia
        //E. Inggris, Finlandia, Belanda


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 24,
            'opsi_pg' => "Perancis, Inggris, Belanda",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 24,
            'opsi_pg' => "Portugis, Spanyol, Moor",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 24,
            'opsi_pg' => "Arab, Turki, Tatar",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 24,
            'opsi_pg' => "Jerman, Norwegia, Skotlandia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 24,
            'opsi_pg' => "Inggris, Finlandia, Belanda",
            'status_benar' => 0,
        ]);

        // 5. Pada tahun 1773, terdapat 3 kapal Inggris yang mengangkut teh untuk Amerika. Karena teh tersebut, 
        // Amerika harus membayar pajak kepada Inggris. Hal tersebut berlanjut pada pembuangan teh Inggris oleh
        // pihak Amerika, singkat cerita Inggris dan Amerika melakukan perang. Insiden perang tersebut dikenal
        // dengan nama...
        // A. Hudson Tea Party
        //B. Boston Tea Party (jawaban)
        //C. Boston War of Independence
        //D. Boston Naval Warfare
        //E. Boston Party


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 25,
            'opsi_pg' => "Hudson Tea Party",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 25,
            'opsi_pg' => "Boston Tea Party",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 25,
            'opsi_pg' => "Boston War of Independence",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 25,
            'opsi_pg' => "Boston Naval Warfare",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 25,
            'opsi_pg' => "Boston Party",
            'status_benar' => 0,
        ]);

        // 6. Dimana pertempuran pertama Revolusi Amerika terjadi?
        // A. Ottawa
        //B. Paddington
        //C. Luxemburg
        //D. Washington
        //E. Lexington (jawaban)


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 26,
            'opsi_pg' => "Ottawa",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 26,
            'opsi_pg' => "Paddington",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 26,
            'opsi_pg' => "Luxemburg",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 26,
            'opsi_pg' => "Washington",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 26,
            'opsi_pg' => "Lexington",
            'status_benar' => 1,
        ]);

        // 7. Negara manakah yang membeli Alaska pada tahun 1867?
        // a. Spanyol
        //B. Rusia (jawaban)
        //C. Portugis
        //D. Perancis
        //E. Kanada

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 27,
            'opsi_pg' => "Spanyol",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 27,
            'opsi_pg' => "Rusia",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 27,
            'opsi_pg' => "Portugis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 27,
            'opsi_pg' => "Perancis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 27,
            'opsi_pg' => "Kanada",
            'status_benar' => 0,
        ]);

        // 8. Siapakah orang yang ditunjuk sebagai presiden pertama Amerika Serikat?
        // A. Thomas Jefferson
        //B. Abraham Lincoln
        //C. George Washington (jawaban)
        //D. Hamilton
        //E. Benjamin Franklin


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 28,
            'opsi_pg' => "Thomas Jefferson",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 28,
            'opsi_pg' => "Abraham Lincoln",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 28,
            'opsi_pg' => "George Washington",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 28,
            'opsi_pg' => "Hamilton",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 28,
            'opsi_pg' => "Benjamin Franklin",
            'status_benar' => 0,
        ]);

        // 9. Terdapat dua pemikiran yang melandasi Revolusi Amerika, yaitu...
        // a. Paham Kebebasan dalam Perdagangan dan Paham Kebebasan dalam Politik (jawaban)
        // B. Paham Kebebasan dalam Berpolitik dan Paham Kebebasan dalam Berargumen
        // C. Paham Nasionalis dan Paham Liberalis
        // D. Paham Kebebasan dalam Membayar Pajak dan Paham Kebebasan dalam Menentukan Wilayah Jajahan
        // E. Paham Pilgrim dan Monarki


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 29,
            'opsi_pg' => "Paham Kebebasan dalam Perdagangan dan Paham Kebebasan dalam Politik",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 29,
            'opsi_pg' => "Paham Kebebasan dalam Berpolitik dan Paham Kebebasan dalam Berargumen",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 29,
            'opsi_pg' => "Paham Nasionalis dan Paham Liberalis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 29,
            'opsi_pg' => "Paham Kebebasan dalam Membayar Pajak dan Paham Kebebasan dalam Menentukan Wilayah Jajahan",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 29,
            'opsi_pg' => "Paham Pilgrim dan Monarki",
            'status_benar' => 0,
        ]);

        // 10. Perjanjian perdamaian antara Inggris dan Perancis diadakan pada tahun...
        // a. 1774
        //B. 1784 (jawaban)
        //C. 1786
        //D. 1776
        //E. 1789

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 30,
            'opsi_pg' => "1774",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 30,
            'opsi_pg' => "1784",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 30,
            'opsi_pg' => "1786",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 30,
            'opsi_pg' => "1776",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 30,
            'opsi_pg' => "1789",
            'status_benar' => 0,
        ]);

        //level 4

        // 1.
        // 1) Kenangan kejayaan masa lampau
        //2) Penderitaan akibat penajajahan
        //3) Munculnya golongan terpelajar
        //4) Kemenangan Jepang atas Rusia, 1905
        //5) Masuknya faham liberal
        //Yang merupakan faktor internal pendorong lahirnya nasionalisme di Indonesia adalah...
        // a. 1, 2, 3 (jawaban)
        // b. 1, 2, 4
        // c. 2, 3, 4
        // d. 2, 4, 5
        // e. 3, 4, 5

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 31,
            'opsi_pg' => "1, 2, 3",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 31,
            'opsi_pg' => "1, 2, 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 31,
            'opsi_pg' => "2, 3, 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 31,
            'opsi_pg' => "2, 4, 5",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 31,
            'opsi_pg' => "3, 4, 5",
            'status_benar' => 0,
        ]);

        // 2. Di dalam perjanjian Renville, wilayah Indonesia yang diakui Belanda hanya Sumatera, Jawa Tengah 
        // dan Jogjakarta. Daerah Jawa Barat, Madura, dan Jawa Timur tidak lagi menjadi milik RI karena...
        // A. Dikuasai oleh Belanda dalam Agresi Militer I (jawaban)
        // B. Ketiga daerah yang masuk dalam perjanjian Linggarjati itu telah bergabung di dalam BFO
        //C. Ketiga daerah tersebut masih dikuasai oleh tentara Kartoswiryo
        //D. Daerah yang telah tergabung di dalam Jawa Tengah
        //E. Ketiga daerah tersebut telah tergabung di dalam Indonesia Timur


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 32,
            'opsi_pg' => "Dikuasai oleh Belanda dalam Agresi Militer I",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 32,
            'opsi_pg' => "Ketiga daerah yang masuk dalam perjanjian Linggarjati itu telah bergabung di dalam BFO",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 32,
            'opsi_pg' => "Ketiga daerah tersebut masih dikuasai oleh tentara Kartoswiryo",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 32,
            'opsi_pg' => "Daerah yang telah tergabung di dalam Jawa Tengah",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 32,
            'opsi_pg' => "Ketiga daerah tersebut telah tergabung di dalam Indonesia Timur",
            'status_benar' => 0,
        ]);

        // 3. Di Indonesia semangat Reformasi Amerika mempengaruhi pergerakan nasional di Indonesia, yaitu...
        // A. Masuknya faham komunis di Indonesia
        //B. Bupati dijadikan sebagai pegawai pemerintah Daendels
        //C. Lebih bersifat pada paham-paham tentang hak bagi setiap bangsa untuk memperoleh kemerdekaan dan kedaulatan. (jawaban)
        //D. Menyebabkan masuknya pengaruh Maxisme
        //E. Beberapa tokoh politik Indonesia diangkat oleh pemerintah Hindia Belanda sebagai anggota Volksraad


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 33,
            'opsi_pg' => "Masuknya faham komunis di Indonesia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 33,
            'opsi_pg' => "Bupati dijadikan sebagai pegawai pemerintah Daendels",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 33,
            'opsi_pg' => "Lebih bersifat pada paham-paham tentang hak bagi setiap bangsa untuk memperoleh kemerdekaan dan kedaulatan.",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 33,
            'opsi_pg' => "Menyebabkan masuknya pengaruh Maxisme",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 33,
            'opsi_pg' => "Beberapa tokoh politik Indonesia diangkat oleh pemerintah Hindia Belanda sebagai anggota Volksraad",
            'status_benar' => 0,
        ]);

        // 4. Pengaruh Revolusi Perancis terhadap perkembangan sejarah Indonesia adalah sebagai berikut...
        // A. Indonesia jatuh ke tangan penajajahan Belanda-Perancis dibawah Herman Willem Daendels
        // B. Penerapan liberalisme dalam perekonomian
        // C. Penghapusan feodalisme
        // D. Meluasnya nasionalisme di kalangan pergerakan nasional (jawaban)
        // E. Meluasnya sosialisme-komunisme di kalangan pergerakan nasional


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 34,
            'opsi_pg' => "Indonesia jatuh ke tangan penajajahan Belanda-Perancis dibawah Herman Willem Daendels",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 34,
            'opsi_pg' => "Penerapan paham liberalisme dalam perekonomian",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 34,
            'opsi_pg' => "Penghapusan feodalisme",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 34,
            'opsi_pg' => "Meluasnya nasionalisme di kalangan pergerakan nasional",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 34,
            'opsi_pg' => "Meluasnya sosialisme-komunisme di kalangan pergerakan nasional",
            'status_benar' => 0,
        ]);

        // 5. Nilai-nilai yang dapat diambil oleh bangsa Indonesia dengan terjadinya revolusi di 
        // berbagai negara di Eropa dan Amerika adalah...
        // A. Mampu mengembangkan industry yang lebih modern
        // B. Menumbuhkembangkan kembali kerajaan-kerajaan di Nusantara yang pernah Berjaya
        // C. Menyadarkan jiwa bangsa untuk mengusir penjajah (jawaban)
        // D. Tumbuh subur idiologi komunis
        // E. Ikut memusuhi Inggris sebagaimana penduduk koloni Amerika


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 35,
            'opsi_pg' => "Mampu mengembangkan industry yang lebih modern",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 35,
            'opsi_pg' => "Menumbuhkembangkan kembali kerajaan-kerajaan di Nusantara yang pernah Berjaya",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 35,
            'opsi_pg' => "Menyadarkan jiwa bangsa untuk mengusir penjajah",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 35,
            'opsi_pg' => "Tumbuh subur idiologi komunis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 35,
            'opsi_pg' => "Ikut memusuhi Inggris sebagaimana penduduk koloni Amerika",
            'status_benar' => 0,
        ]);

        // 6. Peristiwa yang terjadi pada masa perjuangan mempertahankan kemerdekaan dan dijadikan 
        // sebagai hari Pahlawan adalah peristiwa...
        // A. Pertempuran di Surabaya (jawaban)
        // B. Palagan Ambarawa
        // C. Bandung Lautan Api
        // D. Merah Putih Manado
        // E. Medan Area


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 36,
            'opsi_pg' => "Pertempuran di Surabaya",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 36,
            'opsi_pg' => "Palagan Ambarawa",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 36,
            'opsi_pg' => "Bandung Lautan Api",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 36,
            'opsi_pg' => "Merah Putih Manado",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 36,
            'opsi_pg' => "Medan Area",
            'status_benar' => 0,
        ]);

        // 7.
        // 1) Pemerintah Belanda mengakui kekuasaan de facto RI atas Sumatera, Jawa, dan Madura.
        // 2) Seluruh pasukan TNI harus keluar dari daerah yang telah dikuasi Belanda
        // 3) Akan dibentuknya Negara Indonesia Serikat yang meliputi seluruh wilayah Hindia-Belanda
        // 4) Akan dibentuk Uni Indonesia-Belanda yang diketuai oleh Belanda
        // 5) Masalah Irian Barat akan dibicarakan kembali satu tahun setelah perjanjian
        // Dari data di atas, yang merupakan isi perjanjian Linggar Jati adalah...
        // a. 1,2,3
        // b. 1,3,4 (jawaban)
        // c. 2,3,4
        // d. 2,4,5
        // e. 3,4,5

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 37,
            'opsi_pg' => "1, 2, 3",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 37,
            'opsi_pg' => "1, 3, 4",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 37,
            'opsi_pg' => "2, 3, 4",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 37,
            'opsi_pg' => "2, 4, 5",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 37,
            'opsi_pg' => "3, 4, 5",
            'status_benar' => 0,
        ]);

        // 8. Sebelum mengikuti KMB (Konferensi Meja Bundar), Indonesia melaksanakan konferensi lain yang bernama...
        // A. Konferensi Inter Indonesian
        // B. Konferensi Intra Indonesia
        // C. Konferensi Indie Indonesia
        // D. Konferensi Inter Indonesia (jawaban)
        // E. Konvensi Inter Indonesia

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 38,
            'opsi_pg' => "Konferensi Inter Indonesian",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 38,
            'opsi_pg' => "Konferensi Intra Indonesia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 38,
            'opsi_pg' => "Konferensi Indie Indonesia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 38,
            'opsi_pg' => "Konferensi Inter Indonesia",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 38,
            'opsi_pg' => "Konvensi Inter Indonesia",
            'status_benar' => 0,
        ]);

        // 9. Kapan Konferensi Meja Bundar diadakan?
        // a.28 Agustus 1959
        // B. 29 Agustus 1939
        // C. 21 Agustus 1949
        // D. 23 Agustus 1999
        // E. 23 Agustus 1949 (jawaban)


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 39,
            'opsi_pg' => "28 Agustus 1959",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 39,
            'opsi_pg' => "29 Agustus 1939",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 39,
            'opsi_pg' => "21 Agustus 1949",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 39,
            'opsi_pg' => "23 Agustus 1999",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 39,
            'opsi_pg' => "23 Agustus 1949",
            'status_benar' => 1,
        ]);

        // 10. Dimana Konferensi Meja Bundar diadakan?
        // a. New York
        // B. Denville
        // C. Den Haag (jawaban)
        // D. Deutschland
        // E. Indonesia

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 40,
            'opsi_pg' => "New York",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 40,
            'opsi_pg' => "Denville",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 40,
            'opsi_pg' => "Den Haag",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 40,
            'opsi_pg' => "Deutschland",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 40,
            'opsi_pg' => "Indonesia",
            'status_benar' => 0,
        ]);

        //level 5
        // 1. Pada Juli 1789, rakyat Perancis menyerbu dan menguasai penjara Bastille. Penyerbuan terhadap 
        // penjara Bastille ini menjadi simbol berakhirnya absolute monarchi di Perancis, karena...
        // A. Bangunan terkokoh dan terbesar yang pernah dibangun oleh kaisar Perancis
        // B. Dipenjarakan pemimpin-pemimpin rakyat yang menentang kaisar (jawaban)
        // C. Bangungan paling seram di Perancis
        // D. Bangunan yang sering dikunjungi oleh raja Louis dan para bangsawan lainnya 
        // E. Menyimpan misteri perebutan kekuasaan antara keluarga raja


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 41,
            'opsi_pg' => "Bangunan terkokoh dan terbesar yang pernah dibangun oleh kaisar Perancis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 41,
            'opsi_pg' => "Dipenjarakan pemimpin-pemimpin rakyat yang menentang kaisar",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 41,
            'opsi_pg' => "Bangungan paling seram di Perancis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 41,
            'opsi_pg' => "Bangunan yang sering dikunjungi oleh raja Louis dan para bangsawan lainnya ",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 41,
            'opsi_pg' => "Menyimpan misteri perebutan kekuasaan antara keluarga raja",
            'status_benar' => 0,
        ]);

        // 2. Tahun 1789 Revolusi Perancis berhasil menumbangkan absolut Monarchi dan menjadi Constituante monarchi 
        // serta digantikan Republik pada tahun 1792. Pada tahun 1799 rakyat menginginkan kembali absolutism dengan
        // memuja Napoleon Bonaperte sebagai Kaisar Perancis dengan alasan...
        // a. Rakyat menginginkan adanya seseorang yang mampu menyelamatkan negara dari kehancuran (jawaban)
        // B. Bonaparte membubarkan pemerintahan Directoire yang kekerasan senjata
        // C. Bonaparte memperoleh kemenangan dalam berbagai pertempuran
        // D. Pemerintahan Republik tidak sesuai dengan nilai-nilai luhur rakyat Perancis
        // E. Kaum Bangsawan selalu mencari kesempatan untuk kembali berkuasa di Perancis


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 42,
            'opsi_pg' => "Rakyat menginginkan adanya seseorang yang mampu menyelamatkan negara dari kehancuran",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 42,
            'opsi_pg' => "Bonaparte membubarkan pemerintahan Directoire yang kekerasan senjata",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 42,
            'opsi_pg' => "Bonaparte memperoleh kemenangan dalam berbagai pertempuran",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 42,
            'opsi_pg' => "Pemerintahan Republik tidak sesuai dengan nilai-nilai luhur rakyat Perancis",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 42,
            'opsi_pg' => "Kaum Bangsawan selalu mencari kesempatan untuk kembali berkuasa di Perancis",
            'status_benar' => 0,
        ]);

        // 3. Pengaruh perang kemerdekaan Amerika dari Inggris memberikan pengaruh kepada rakyat Perancis, yaitu...
        // a. Perancis adalah untuk rakyat Perancis tidak ada hubungannya dengan kerajaan Inggris
        // B. Dipujanya Bonaparte sebagai pemimpin Perancis baru yang akan menyelamatkan negeri dari kesengsaraan
        // C. Runtuhnya pemerintahan Directoire yang kejam dan tidak adil
        // D. Semangat dan keberanian untuk membebaskan diri dari penindasan absolut Monarchi raja Perancis (jawaban)
        // E. Keberanian menantang dominasi perdagangan orang-orang Belanda di Perancis


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 43,
            'opsi_pg' => "Perancis adalah untuk rakyat Perancis tidak ada hubungannya dengan kerajaan Inggris",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 43,
            'opsi_pg' => "Dipujanya Bonaparte sebagai pemimpin Perancis baru yang akan menyelamatkan negeri dari kesengsaraan",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 43,
            'opsi_pg' => "Runtuhnya pemerintahan Directoire yang kejam dan tidak adil",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 43,
            'opsi_pg' => "Semangat dan keberanian untuk membebaskan diri dari penindasan absolut Monarchi raja Perancis",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 43,
            'opsi_pg' => "Keberanian menantang dominasi perdagangan orang-orang Belanda di Perancis",
            'status_benar' => 0,
        ]);

        // 4. Semboyan bangsa Perancis yang masuk dan berkembang di kalangan rakyat Hindia Belanda adalah...
        // a.Gold, Glory, dan Gospel
        // B. Vini, Vidi, Vici
        // C. Siyap, bertahan, dan serang
        // D. Berlayar, datang, dan kuasai
        // E. Liberte, egalite, dan frathernite (jawaban)


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 44,
            'opsi_pg' => "Gold, Glory, dan Gospel",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 44,
            'opsi_pg' => "Vini, Vidi, Vici",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 44,
            'opsi_pg' => "Siyap, bertahan, dan serang",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 44,
            'opsi_pg' => "Berlayar, datang, dan kuasai",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 44,
            'opsi_pg' => "Liberte, egalite, dan frathernite",
            'status_benar' => 1,
        ]);

        // 5. Pemerintahan terror pada masa Revolusi Perancis dipimpin oleh...
        // a.Napoleon Bonaparte
        // B. Voltaire
        // C. Robespiere (jawaban)
        // D. Morat
        // E. Danton


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 45,
            'opsi_pg' => "Napoleon Bonaparte",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 45,
            'opsi_pg' => "Voltaire",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 45,
            'opsi_pg' => "Robespiere",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 45,
            'opsi_pg' => "Morat",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 45,
            'opsi_pg' => "Danton",
            'status_benar' => 0,
        ]);

        // 6. Sebab Khusus terjadinya Revolusi Perancis adalah...
        // a.Pajak rakyat yang membumbung tinggi
        // B. Utang negara yang terlalu banyak (jawaban)
        // C. Pengaruh perang Kemerdekaan Amerika
        // D. Adanya blanko penangkapan raja Louis XVI beserta keluarga
        // E. Perjuangan kaum Robespierre


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 46,
            'opsi_pg' => "Pajak rakyat yang membumbung tinggi",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 46,
            'opsi_pg' => "Utang negara yang terlalu banyak",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 46,
            'opsi_pg' => "Pengaruh perang Kemerdekaan Amerika",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 46,
            'opsi_pg' => "Adanya blanko penangkapan raja Louis XVI beserta keluarga",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 46,
            'opsi_pg' => "Perjuangan kaum Robespierre",
            'status_benar' => 0,
        ]);

        // 7. Revolusi Perancis terjadi pada tahun...
        // a.1789 - 1800
        // B. 1779 - 1789
        // C. 1779 – 1999
        // D. 1775 – 1799
        // E. 1789 – 1799 (jawaban)


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 47,
            'opsi_pg' => "1789-1800",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 47,
            'opsi_pg' => "1779-1789",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 47,
            'opsi_pg' => "1779–1999",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 47,
            'opsi_pg' => "1775–1799",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 47,
            'opsi_pg' => "1789–1799",
            'status_benar' => 1,
        ]);

        // 8. Siapakah nama tokoh romantisme yang berpengaruh pada Revolusi Perancis?
        // a.Napoleon Bonaparte
        // B. Jean Jacques Rosseau (jawaban)
        // C. Władysław II Jagiełło
        // D. Voltaire
        // E. Montesquieu

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 48,
            'opsi_pg' => "Napoleon Bonaparte",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 48,
            'opsi_pg' => "Jean Jacques Rosseau",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 48,
            'opsi_pg' => "Władysław II Jagiełło",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 48,
            'opsi_pg' => "Voltaire",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 48,
            'opsi_pg' => "Montesquieu",
            'status_benar' => 0,
        ]);

        // 9. Kapan rakyat Perancis menyerbu dan merebut benteng Bastille?
        // a. 15 Juli 1789
        // B. 17 Juli 1879
        // C. 17 Juni 1779
        // D. 17 Juli 1789 (jawaban)
        // E. 18 Juni 1789


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 49,
            'opsi_pg' => "15 Juli 1789",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 49,
            'opsi_pg' => "17 Juli 1879",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 49,
            'opsi_pg' => "17 Juni 1779",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 49,
            'opsi_pg' => "17 Juli 1789",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 49,
            'opsi_pg' => "18 Juni 1789",
            'status_benar' => 0,
        ]);

        // 10. Feodalisme membagi-bagi masyarakat dalam golongan-golongan yang berhak dan yang tidak berhak. 
        // Di Perancis ketika terdapat beberapa golongan, pada golongan berapakah kaum agama berada?
        // a.Golongan ke-1
        // B. Golongan ke-3
        // C. Golongan ke-2 (jawaban)
        // D. Golongan ke-5
        // E. Golongan ke-4


        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 50,
            'opsi_pg' => "Golongan ke-1",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 50,
            'opsi_pg' => "Golongan ke-3",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 50,
            'opsi_pg' => "Golongan ke-2",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 50,
            'opsi_pg' => "Golongan ke-5",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 50,
            'opsi_pg' => "Golongan ke-4",
            'status_benar' => 0,
        ]);

        //level 6

        // 1. Pelopor terjadinya Revolusi Februari 1917 di Rusia yang berhasil 
        // menggulingkan kekuasaan Tsar Nicholas II adalah...
        // a. Sergei Witte
        // b. Kerensky
        // c. Vladimir Lenin
        // d. Mensjewiki (jawaban)
        // e. Feori Lvov

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 51,
            'opsi_pg' => "Sergei Witte",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 51,
            'opsi_pg' => "Kerensky",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 51,
            'opsi_pg' => "Vladimir Lenin",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 51,
            'opsi_pg' => "Mensjewiki",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 51,
            'opsi_pg' => "Feori Lvov",
            'status_benar' => 0,
        ]);

        // 2. Politik luar negeri Rusia yang terkenal adalah...
        // a. Politik bebas aktif
        // b. Imperialisme
        // c. Air hangat (jawaban)
        // d. Kolonialisme
        // e. Komunisme

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 52,
            'opsi_pg' => "Politik bebas aktif",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 52,
            'opsi_pg' => "Imperialisme",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 52,
            'opsi_pg' => "Air Hangat",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 52,
            'opsi_pg' => "Kolonialisme",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 52,
            'opsi_pg' => "Komunisme",
            'status_benar' => 0,
        ]);

        // 3. Sebelum Revolusi Rusia meletus, muncul aliran-aliran yang menentang 
        // kekuasaan Tsar, salah satu aliran itu adalah...
        // a. Pan-Slavinisme (jawaban)
        // b. Nasionalisme
        // c. Aufklärung
        // d. Renaissance
        // e. Kebebasan perdagangan

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 53,
            'opsi_pg' => "Pan-Slavinisme",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 53,
            'opsi_pg' => "Nasionalisme",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 53,
            'opsi_pg' => "Aufklärung",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 53,
            'opsi_pg' => "Renaissance",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 53,
            'opsi_pg' => "Kebebasan perdagangan",
            'status_benar' => 0,
        ]);

        // 4. Pengaruh Revolusi Rusia di bidang ideologi adalah...
        // a. Munculnya partai komunis di Rusia
        // b. Munculnya tokoh-tokoh pembaharu di Rusia
        // c. Adanya gerakan komunis yang menentang pemerintah
        // d. Berkembangnya faham komunis ke seluruh dunia (jawaban)
        // e. Lenyapnya Komunisme di dalam tubuh partai di Rusia

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 54,
            'opsi_pg' => "Munculnya partai komunis di Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 54,
            'opsi_pg' => "Munculnya tokoh-tokoh pembaharu di Rusia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 54,
            'opsi_pg' => "Adanya gerakan komunis yang menentang pemerintah",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 54,
            'opsi_pg' => "Berkembangnya faham komunis ke seluruh dunia",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 54,
            'opsi_pg' => "Lenyapnya Komunisme di dalam tubuh partai di Rusia",
            'status_benar' => 0,
        ]);

        // 5. Akibat Revolusi Rusia bagi dunia antara lain sebagai berikut, kecuali...
        // a. Meluasnya komunisme Rusia di seluruh dunia
        // b. Modernisasi Rusia sejajar dengan negara-negara industri dunia
        // c. Sistem kepartaian di Rusia dikuasai golongan atas dan feodal (jawaban)
        // d. Timbulnya demokrasi rakyat sebagai lawan demokrasi liberal
        // e. Negara-negara dunia ketiga terinspirasi untuk mengadopsi gaya Revolusi Rusia ada Lenin

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 55,
            'opsi_pg' => "Meluasnya komunisme Rusia di seluruh dunia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 55,
            'opsi_pg' => "Modernisasi Rusia sejajar dengan negara-negara industri dunia",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 55,
            'opsi_pg' => "Sistem kepartaian di Rusia dikuasai golongan atas dan feodal",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 55,
            'opsi_pg' => "Timbulnya demokrasi rakyat sebagai lawan demokrasi liberal",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 55,
            'opsi_pg' => "Negara-negara dunia ketiga terinspirasi untuk mengadopsi gaya Revolusi Rusia ada Lenin",
            'status_benar' => 0,
        ]);

        // 6. Faham yang mengatakan bahwa masyarakat ini telah terlanjur rusak dan 
        // tidak mungkin lagi dapat diperbaiki, karena itu harus dilenyapkan sama sekali. 
        // Kemudian setelah lenyap sama sekali, baru disusun masyarakat baru berdasarkan atas ratio. 
        // Pernyataan tersebut merupakan makna dari...
        // a. Vacuum-of-Law
        // b. Nihilisme (jawaban)
        // c. Komunisme
        // d. Ateisme
        // e. Anarkisme

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 56,
            'opsi_pg' => "Vacuum-of-Law",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 56,
            'opsi_pg' => "Nihilisme",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 56,
            'opsi_pg' => "Komunisme",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 56,
            'opsi_pg' => "Ateisme",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 56,
            'opsi_pg' => "Anarkisme",
            'status_benar' => 0,
        ]);

        // 7. Kapan Revolusi Februari dimulai?
        // a. 24 Februari 1917
        // b. 3 Maret 1917
        // c. 25 Februari 1917
        // d. 23 Februari 1916
        // e. 23 Februari 1917 (jawaban)

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 57,
            'opsi_pg' => "24 Februari 1917",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 57,
            'opsi_pg' => "3 Maret 1917",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 57,
            'opsi_pg' => "25 Februari 1917",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 57,
            'opsi_pg' => "23 Februari 1916",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 57,
            'opsi_pg' => "23 Februari 1917",
            'status_benar' => 1,
        ]);

        // 8. Dimana Revolusi Oktober dimulai?
        // a. Rhineland
        // b. Moskow
        // c. Petrograd (jawaban)
        // d. Donbas
        // e. Slavia

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 58,
            'opsi_pg' => "Rhineland",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 58,
            'opsi_pg' => "Moskow",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 58,
            'opsi_pg' => "Petrograd",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 58,
            'opsi_pg' => "Donbas",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 58,
            'opsi_pg' => "Slavia",
            'status_benar' => 0,
        ]);

        // 9. Salah satu pengaruh Revolusi Rusia di dunia adalah terjadinya
        // persaingan antar paham komunis dengan paham demokrasi liberal
        // menyebabkan terjadinya...
        // a. Perang Dingin (jawaban)
        // b. Perang Salju
        // c. Perang Musim Dingin
        // d. Perang Politik
        // e. Perang Ideologi

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 59,
            'opsi_pg' => "Perang Dingin",
            'status_benar' => 1,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 59,
            'opsi_pg' => "Perang Salju",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 59,
            'opsi_pg' => "Perang Musim Dingin",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 59,
            'opsi_pg' => "Perang Politik",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 59,
            'opsi_pg' => "Perang Ideologi",
            'status_benar' => 0,
        ]);

        // 10. Pelopor terjadinya Revolusi Oktober 1917 di Rusia yang berhasil
        // menggulingkan kekuasaan Mensjewiki adalah...
        // a. Tsar Nicolas II
        // b. Joseph Stalin
        // c. Alexander XVI
        // d. Vladimir Romanov
        // e. Vladimir Lenin (jawaban)

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 60,
            'opsi_pg' => "Tsar Nicolas II",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 60,
            'opsi_pg' => "Joseph Stalin",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 60,
            'opsi_pg' => "Alexander XVI",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 60,
            'opsi_pg' => "Vladimir Romanov",
            'status_benar' => 0,
        ]);

        sej11_opsi_pilgan::create([
            'sej11_soal_id' => 60,
            'opsi_pg' => "Vladimir Lenin",
            'status_benar' => 1,
        ]);

       
   //waktu
        sej11_waktu::create([
            'waktu' => 15,
        ]);

        sej11_waktu::create([
            'waktu' => 10,
        ]);

        sej11_waktu::create([
            'waktu' => 5,
        ]);

        User::factory(10)->create();
        Sej11_link_youtube::factory(3)->create();
        Sej11_gambar_materi::factory(5)->create();
    }
}
