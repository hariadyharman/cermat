<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
   User::factory(10)->create();

   //     User::create([
   //  'name' =>'Harman hariady',
   //  'email'=>'mando@gmail.com',
   //  'password'=>bcrypt('12345678')
    
   //        ]);
   //         User::create([
   //  'name' =>'Agung wahyudi',
   //  'email'=>'agung@gmail.com',
   //  'password'=>bcrypt('Agung_tele')
    
   //        ]);
   //        User::create([
   //  'name' =>'Muh Fahrurrozi',
   //  'email'=>'fahrurrozi@gmail.com',
   //  'password'=>bcrypt('ozijomblo')
    
         //  ]);

       Post::create([
    'title' =>'Judul Pertama',
    'category_id'=>1,
    'user_id'=>1,
    'slug'=>'judul-pertama',
    'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
    'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi maiores, nemo magni aut rerum saepe incidunt eum debitis recusandae. Quo totam sapiente ut aliquid,<> cum tempora perferendis non itaque repellat aut est expedita alias distinctio. Nam itaque vitae accusamus suscipit facere eligendi voluptate non dolorum quas. In hic facilis vitae cum, voluptas, excepturi nam,molestiae aspernatur veritatis laudantium eos perspiciatis? Iure, deserunt? Nobis ea eligendi ex voluptate ut, aut asperiores a tempora nisi vitae cum iure. Quam culpa, assumenda laudantium quibusdam officiis eos id dolores consequatur rem placeat deserunt iste molestias velit dolorem porro,laborum quod molestiae illo cum aliquid?',
       ]);


Post::create([
    'title' =>'Judul Kedua',
    'category_id'=>1,
    'user_id'=>1,
    'slug'=>'judul-kedua',
    'excerpt'=>'Belajar di waktu kecil bagai mengukir di atas batu, sedangkan belajar sesudah besar bagai melukis di atas air',
    'body'=>'  Belajar di waktu kecil bagai mengukir di atas batu, sedangkan belajar sesudah besar bagai melukis di atas air, begitu sebuah kalimat bijak yang sering kita dengar, memberikan tunjuk ajar. Namun demikian dan meskipun laksana mengukir di atas air, di usia tua pun kita harus tetap belajar. <p>Teks Menuntut Ilmu di waktu Kecil bagaikan Mengukir di atas Batu, atau dalam teks yang lebih panjang Menuntut Ilmu di Waktu Kecil bagaikan Mengukir di atas Batu dan menuntut Ilmu di masa Tua bagaikan menulis di atas air, adalah teks yang sangat terkenal, terutama dalam dunia pendidikan Islam. elajar di waktu kecil bagai mengukir di atas batu, sedangkan belajar sesudah besar bagai melukis di atas air, begitu sebuah kalimat bijak yang sering kita dengar, memberikan tunjuk ajar. </p> <p>Namun demikian dan meskipun laksana mengukir di atas air, di usia tua pun kita harus tetap belajar. Teks Menuntut Ilmu di waktu Kecil bagaikan Mengukir di atas Batu, atau dalam teks yang lebih panjang Menuntut Ilmu di Waktu Kecil bagaikan Mengukir di atas Batu dan menuntut Ilmu di masa Tua bagaikan menulis di atas air, adalah teks yang sangat terkenal, terutama dalam dunia pendidikan Islam. Anak yang terbiasa belajar sedari kecil akan lebih siap dan cepat dalam menerima informasi baru. ',
]);

  Post::create([
    'title' =>'Judul Ketiga',
     'category_id'=>2,
     'user_id'=>3,
     'slug'=>'judul-ketiga',
    'excerpt'=>'Menjalani kehidupan tidaklah bisa dibilang sederhana.',
    'body'=>'Menjalani kehidupan tidaklah bisa dibilang sederhana. Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang yang menyesatkan,  Islam memberikan pedoman kepada umatnya berupa kitab suci Al-Quran. <p>Menjalani kehidupan tidaklahç bisa dibilang sederhana.  Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang  diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang  yang menyesatkan, Islam memberikan pedoman kepada umatnya berupa kitab suci Al-Quran.</p> <p>Menjalani kehidupan tidaklah bisa dibilang sederhana.  Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang yang menyesatkan,  Islam memberikan pedoman kepada umatnya berupa kitab suci Al-Quran. Menjalani kehidupan tidaklah bisa dibilang sederhana.  Dilahirkan ke dunia ini berarti juga siap untuk menghadapi setiap ujian yang diberikan oleh Allah. Oleh karena itu, agar kamu tak terjerumus ke dalam jurang yang menyesatkan, Islam memberikan pedoman kepada umatnya berupa kitab suci Al-Quran.</p>',
    ]);

    Post::create([
    'title' =>'Judul Keempat',
     'category_id'=>3,
     'user_id'=>2,
     'slug'=>'judul-keempat',
    'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus magnam vitae magni numquam nihil sit ratione, alias ipsam, commodi earum mollitia et voluptate tempore ea!<p> Modi non molestias repellat totam enim autem veniam iste eius cumque, voluptas adipisci delectus officiis alias pariatur neque cupiditate! Explicabo est ducimus iusto minus accusamus possimus magnam obcaecati magni. Iure officia aliquam sequi praesentium id sit officiis provident tempora? Modi non molestias repellat totam enim autem veniam iste eius cumque, voluptas adipisci delectus officiis alias pariatur neque cupiditate! Explicabo est ducimus iusto minus accusamus possimus magnam obcaecati magni. Iure officia aliquam sequi praesentium id sit officiis provident tempora? Tempora dolor optio hic neque possimus aut inventore totam, ducimus similique consequuntur! Provident adipisci culpa officia ullam veniam nihil quos iure quia obcaecati esse voluptatem minus, corporis laborum rerum cumque aperiam est deleniti illo pariatur aliquam.</p><p> Modi non molestias repellat totam enim autem veniam iste eius cumque, voluptas adipisci delectus officiis alias pariatur neque cupiditate! Explicabo est ducimus iusto minus accusamus possimus magnam obcaecati magni. Iure officia aliquam sequi praesentium id sit officiis provident tempora? Modi non molestias repellat totam enim autem veniam iste eius cumque, voluptas adipisci delectus officiis alias pariatur neque cupiditate! Explicabo est ducimus iusto minus accusamus possimus magnam obcaecati magni. Iure officia aliquam sequi praesentium id sit officiis provident tempora? Modi non molestias repellat totam enim autem veniam iste eius cumque, voluptas adipisci delectus officiis alias pariatur neque cupiditate! Explicabo est ducimus iusto minus accusamus possimus magnam obcaecati magni. Iure officia aliquam sequi praesentium id sit officiis provident tempora?</p>',
    ]);

   Post::create([
    'title' =>'Judul Kelima',
     'category_id'=>1,
     'user_id'=>3,
     'slug'=>'judul-kelima',
    'excerpt'=>'bila ingin melihat ikan didalam kolam',
    'body'=>'bila ingin melihat ikan didalam kolam, pastikan dulu airnya sebening  kaca, bila ingin melihat gadis pendiam biarkan dulu dia duduk dengan tenang, jangan jangan dulu, janganlah diganggu, biarkan saja dia duduk dengan tenang'
    ]);

    Post::create([
    'title' =>'Judul Keenam',
     'category_id'=>2,
     'user_id'=>3,
     'slug'=>'judul-keenam',
    'excerpt'=>'Alkisah seorang laki-laki bernama Ibnu Jada`an memberikan sedekah dengan harta kesayangannya, yaitu seekor unta betina yang masih produktif mengeluarkan susu kepada seorang tetangga miskin',
    'body'=>'Alkisah seorang laki-laki bernama Ibnu Jada`an memberikan sedekah dengan harta kesayangannya, yaitu seekor unta betina yang masih produktif mengeluarkan susu kepada seorang tetangga miskin yang memiliki tujuh anak perempuan. Tetangga yang beruntung itu senang bukan main. Ia dan ketujuh anak perempuannya dapat minum susu unta betina tersebut setiap hari.
<p>Ketika musim panas tiba dengan kekeringan dan kegersangannya, sehingga tanah retak-retak saking tandusnya. Ibnu Jada`an pergi bersama suku Badui untuk mencari air dan padang rumput.</p>
<p>Di sebuah lubang di dalam tanah yang menyerupai gua yang cukup dalam, dia menemukan banyak sumber mata air. Ibnu Jadaan turun untuk mengambil air sementara ketiga anaknya menunggu di luar lubang. Ibnu Jadaan tersesat di dalam lubang sehingga tidak bisa menemukan jalan keluar.
Ketiga anaknya menunggu sehari, dua, sampai tiga hari sehingga mereka putus asa. Mereka berkesimpulan bahwa mungkin seekor ular mematuk ayahnya dan langsung meninggal dunia. Mereka pun akhirnya kembali ke rumah.
Dengan keyakinan bahwa sang ayah telah meninggal dunia, ketiga anak Ibnu Jada`an ini membagikan harta warisan.</p>'
    ]);

    Post::create([
    'title' =>'Judul Ke Tujuh',
     'category_id'=>2,
     'user_id'=>5,
     'slug'=>'judul-ke-tujuh',
    'excerpt'=>'Setelah tiga hari berada dalam lubang, saya kehilangan harapan untuk dapat hidup. Saya berserah diri kepada Allah SWT. ',
    'body'=>'Setelah tiga hari berada dalam lubang, saya kehilangan harapan untuk dapat hidup. Saya berserah diri kepada Allah SWT. Pada hari keempat, tiba-tiba saya merasakan ada susu mengalir di lidah saya. Saya pun bangun dan dalam kegelapan, samar-samar saya melihat wadah susu mendekat ke mulutku dan menuangkan seluruh isinya sehingga saya merasa kenyang. Lalu wadah itu menghilang dan kembali lagi pada saat makan malam. Demikian setiap harinya saya diberi minum susu sebanyak tiga kali, tetapi sejak dua hari yang lalu wadah misterius itu tidak pernah datang lagi.
              <p>Jika Anda mengetahui sebab mengapa wadah itu tidak lagi datang membawakan susu, Anda tentu akan merasa lebih heran.
              Memangnya apa yang terjadi?</p>
              <p>Ketiga anakmu mengira bahwa Anda telah meninggal dunia. Mereka telah mengambil unta betina yang air susunya Allah kirimkan untukmu. Sorang muslim akan tetap berada dalam lindungan perbuatan sedekahnya seperti yang dikatakan dalam pepatah, "Orang yang melakukan kebajikan akan terlindungi dari segala keburukan.</p>'
    ]);

    Post::create([
    'title' =>'Judul Ke Delapan',
     'category_id'=>3,
     'user_id'=>4,
     'slug'=>'judul-ke-delapan',
    'excerpt'=>'pasti sudah tidak asing dong dengan dongeng yang menceritakan tentang hewan kancil melawan buaya?  ',
    'body'=>'pasti sudah tidak asing dong dengan dongeng yang menceritakan tentang hewan kancil melawan buaya? Padahal dari segi ukuran tubuh, kancil lebih kecil daripada buaya sehingga bisa saja dirinya kalah dan menjadi santapan buaya. Namun dalam dongeng ini, kancil digambarkan sebagai hewan yang kecil tetapi cerdik meskipun lawannya adalah hewan buaya, salah satunya adalah buaya. Meskipun alur cerita dalam dongeng si kancil itu selalu sama yakni si kancil akan tetap memenangkan perlombaan, tetapi tetap saja kok semua dongeng tersebut memiliki nilai moral yang tak kalah baiknya.
              <p>Berhubung dongeng itu termasuk dalam karya sastra yang memiliki fungsi utile alias bersifat mendidik, maka isi dongeng itu juga harus berupaya memberikan pengajaran kepada pembacanya. Tak terkecuali dengan dongeng kancil dan buaya ini, yang ternyata memiliki banyak sekali muatan nilai moralnya. Lalu bagaimana sih dongeng kancil dan buaya ini? Bagaimana pula muatan nilai moral dalam dongeng tersebut? Yuk simak ulasan berikut ini, siapa tahu Grameds hendak menceritakannya kepada anak, adik, atau keponakan kita mengenai dongeng menakjubkan ini.</p>'
    ]);

     Post::create([
    'title' =>'Judul Ke Sembilan',
     'category_id'=>1,
     'user_id'=>4,
     'slug'=>'judul-ke-sembilan',
    'excerpt'=>'terdapat tiga masalah mendasar pada murid, guru, dan buku. Matematika selama ini mendapatkan stigma negatif di kalangan siswa ',
    'body'=>'Terdapat tiga masalah mendasar pada murid, guru, dan buku. Matematika selama ini mendapatkan stigma negatif di kalangan siswa dan dianggap sebagai pelajaran yang rumit, berputar pada angka, kompleks dan membosankan. Siswa umumnya kehilangan ketajaman visual mereka ketika melihat sesuatu yang tidak diminati. Salah satu alasannya karena isi buku yang membosankan dan sulit dipahami. Berdasarkan laporan PISA yang dirilis pada 3 Desember 2019, Indonesia menempati peringkat 72 dari 77 negara dalam nilai membaca, 72 dari 78 negara dalam nilai matematika, dan 70 dari 78 negara dalam nilai sains. Ketiga nilai ini mengalami penurunan secara kompak dari tes PISA 2015. Saat itu, Indonesia menduduki pering6 ke 65 dalam membaca, 64 dalam sains dan 66 dalam matematika. Diantara negara negara Asia Tenggara, Indonesia menempati urutan terakhir dalam membaca bersama Filipina. Berdasarkan laporan tersebut, Indonesia dapat dianggap mengalami darurat belajar matematika.
              <p> Saat ini, sistem pendidikan Indonesia masih terpaku pada kurikulum yang ada. Para guru dituntut untuk menyesuaikan pembelajaran berdasarkan buku yang disusun sesuai dengan kurikulum yang berlaku. Hal ini diperparah dengan pembelajaran yang masih abstrak dan teoritis bagi para siswa. Misalnya, di sekolah kita diajarkan pembelajaran terkait Trigonometri, namun tidak diberikan penjelasan kontekstual terkait mengapa harus mempelajari materi tersebut, bagaimana materi tersebut digunakan dalam keseharian, dan hal aplikatif lainnya. Sedangkan, buku yang dipakai dalam pembelajaran berisi penjelasan yang bersifat teoritis. Padahal, mempelajari matematika membutuhkan fokus dan kedisiplinan belajar yang tinggi untuk memahami materi yang ada. Sehingga, hal inilah yang menguatkan opini siswa bahwa matematika sulit dipahami.</p>'
    ]);

    
    Post::create([
    'title' =>'Judul Ke Sepuluh',
     'category_id'=>2,
     'user_id'=>6,
     'slug'=>'judul-ke-sepuluh',
    'excerpt'=>'Sehingga, sebagai umat muslim sudah seharusnya kita tidak mempercayai isu-isu yang disebarkan oleh orang-orang yang mengaku sebagai utusan Allah SWT setelah Nabi Muhammad SAW. ',
    'body'=>'Sehingga, sebagai umat muslim sudah seharusnya kita tidak mempercayai isu-isu yang disebarkan oleh orang-orang yang mengaku sebagai utusan Allah SWT setelah Nabi Muhammad SAW.
            <p> Allah SWT pun memberikan mukjizat berupa kitab suci Al-Quran yang menjadi pedoman dan petunjuk umat muslim dalam menjalankan kesehariannya di dunia, guna memperoleh bekal yang cukup untuk di akhirat kelak. Inilah alasan mengapa Nabi Muhammad SAW disebut rasul terakhir. Ketetapan ini sudah menjadi ketetapan Allah SWT Yang Maha Kuasa. Sesungguhnya Allah SWT adalah sebaik-baiknya perencana bagi hambaNya.</p>'
    ]);
    
    Post::create([
    'title' =>'Judul Ke duabelas',
     'category_id'=>1,
     'user_id'=>5,
     'slug'=>'judul-ke-duabelas',
    'excerpt'=>'Di ajang antar pelajar se-Asia Tenggara tersebut Aulia Suci Nurfadila berhasil meraih medali perunggu. ',
    'body'=>'Di ajang antar pelajar se-Asia Tenggara tersebut Aulia Suci Nurfadila berhasil meraih medali perunggu. Pevoli bertinggi badan 173 cm itu memulai karir profesionalnya di dunia bola voli dengan memperkuat klub Women Wahana Express Group,dan sempat mengikuti turnamen Asean School Games 2019. <p> Di Sea Games 2023 Kamboja sendiri, Aulia menjadi salah satu pemain termuda, ajang ini juga sekaligus menjadi debut dirinya membela merah putih. Memang lawan-lawan Indonesia di SEA Games kali ini banyak mengandalkan pemain muda terutama Singapura yang paling banyak mengandalkan pemain kelahiran 2003 sampai 2004. Itulah sedikit ulasan mengenai Aulia Suci Nurfadila yang sukses mengantarkan Timnas Voli Putri Indonesia merebut medali perunggu SEA Games 2023 Kamboja. Aulia Suci Nurfadila merupakan gadis kelahiran Sukabumi, 21 April 2004. Bakat voli Aulia sudah menurun dari keluarganya yang juga merupakan pecinta olahraga bola voli.</p>'
    ]);

    Post::create([
    'title' =>'Judul Ke tigabelas',
     'category_id'=>1,
     'user_id'=>5,
     'slug'=>'judul-ke-tigabelas',
    'excerpt'=>'Jakarta Bhayangkara Tim Bola Voli Pendatang Baru di Proliga 2023, Akankan Menyusul Langkah Tim Bogor Lavani',
    'body'=>'Jakarta Bhayangkara Tim Bola Voli Pendatang Baru di Proliga 2023, Akankan Menyusul Langkah Tim Bogor Lavani, Pecinta olahraga bola voli tanah air, dihebohkan dengan kedatangan dua tim baru pada Proliga 2023 mendatang.<p> Mereka adalah Jakarta Bhayangkara untuk sektor putra. Kemudian Jakarta BIN O2C untuk sektor putri Proliga 2023. Mereka bukan hanya siap meramaikan kompetisi bola voli tertinggi di Indonesia, Proliga 2022. Tapi juga siapa bersaing untuk merebut gelar juara Proliga musim mendatangBetapa tidak, tim yang baru dibentuk ini berisi pemain-pemain hebat, yang sering menjadi langganan Timnas Bola Voli Indonesia. Mereka adalah para atlet atlet bola voli berbakat, yang sudah malang melintang menghiasi dunia bola voli tanah air. Tim tangguh tersebut adalah Jakarta Bhayangkara, yang didirikan oleh Polri.</p>'
    ]);




    
    
     Category::create([
    'name' =>'Programing',
    'slug'=>'programing',
    
     ]);

     Category::create([
    'name' =>'Web Design',
    'slug'=>'web-design',
    
     ]);

     Category::create([
    'name' =>'Personal',
    'slug'=>'personal',

     ]);
    }
}
