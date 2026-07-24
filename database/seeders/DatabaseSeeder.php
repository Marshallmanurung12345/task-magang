<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\News::create([
            'title' => 'Samsung Klaim Teknologi Layar Lipat Galaxy Sulit Ditiru Kompetitor',
            'slug' => \Illuminate\Support\Str::slug('Samsung Klaim Teknologi Layar Lipat Galaxy Sulit Ditiru Kompetitor'),
            'thumbnail' => 'news/samsung-fold.jpg',
            'content' => '<p><strong>London</strong> - Samsung menyebut keunggulan teknologi layar lipat ponselnya adalah hasil penyempurnaan yang terus dilakukan selama tujuh generasi perangkat <em>foldable</em>. Karena itu, perusahaan menilai inovasi tersebut tidak mudah ditiru oleh kompetitor.</p><p>Executive Vice President Samsung Electronics, Mobile R&D Hardware, HS Moon mengatakan pengembangan perangkat lipat Samsung diawali dengan memahami bagaimana konsumen menggunakan perangkat mereka dalam kehidupan sehari-hari. Masukan tersebut menjadi dasar dalam mengembangkan material, komponen, hingga pengalaman penggunaan.</p><blockquote class="my-4">"Semuanya dimulai dari memahami bagaimana pelanggan menggunakan HP lipat setiap hari. Masukan tersebut menjadi dasar inovasi material kami, seperti teknologi <strong>Flex Titanium</strong>. Masukan itu juga membimbing desain komponen. Akhirnya, semuanya menghasilkan pengalaman perangkat utuh dan berkembang menjadi tiga portofolio <em>foldable</em> yang berbeda," sebut HS Moon.</blockquote><p>Menurut Moon, Samsung merancang agar setiap bagian saling mendukung. Mereka merekayasa ulang seluruh sistem, termasuk struktur layar, engsel, dan desain termal agar bekerja secara selaras pada setiap form factor.</p><p>Salah satu hasil pendekatan tersebut adalah lahirnya <strong>Flex Titanium</strong>, teknologi baru yang dikembangkan Samsung untuk menghadirkan layar lipat yang lebih tipis tanpa mengorbankan kekuatan maupun daya tahan. Titanium dipilih karena dinilai memiliki karakteristik yang sangat kuat, stabil, dan tahan terhadap deformasi permanen.</p><p>Mengenai kompetitor, Moon menegaskan bahwa fokus utama Samsung bukanlah membandingkan produk dengan kompetitor, melainkan mengoptimalkan pengalaman pengguna secara menyeluruh:</p><ul><li>Meminimalkan bekas lipatan (crease) pada layar.</li><li>Menghasilkan permukaan layar yang lebih rata.</li><li>Mengoptimalkan arsitektur engsel agar proses melipat lebih mulus.</li><li>Meningkatkan ketahanan fisik perangkat dalam jangka panjang.</li></ul><p>Moon pun mengklaim bahwa kombinasi inovasi pada material, struktur layar, engsel, dan pengalaman penggunaan inilah yang membuat teknologi foldable Samsung sangat sulit direplikasi oleh produsen lain.</p><p>Baca artikel detikinet selengkapnya di: <a href="https://inet.detik.com/consumer/d-8587270/samsung-klaim-teknologi-layar-lipat-galaxy-sulit-ditiru-kompetitor" target="_blank">detikinet - Samsung Klaim Layar Lipat Sulit Ditiru</a></p>',
            'view_count' => 0,
        ]);

        \App\Models\News::create([
            'title' => 'Rahasia Samsung Menang di Era Smartphone AI',
            'slug' => \Illuminate\Support\Str::slug('Rahasia Samsung Menang di Era Smartphone AI'),
            'thumbnail' => 'news/samsung-ai.jpg',
            'content' => '<p><strong>London</strong> - Persaingan smartphone, khususnya di segmen premium, kini semakin bergeser ke ranah kecerdasan buatan (AI). Namun, Samsung menilai keunggulan AI tidak hanya ditentukan dari jumlah fitur yang disematkan pada perangkat, melainkan dari seberapa dalam teknologi tersebut terintegrasi dengan keseluruhan pengalaman pengguna.</p><p>Head of Marketing Samsung Electronics Southeast Asia & Oceania, Chon Hong, mengatakan perusahaan melihat AI bukan sebagai fitur tambahan yang dibenamkan pada perangkat yang sudah ada. Menurutnya, pendekatan Samsung berbeda karena AI Galaxy dikembangkan sebagai bagian dari fondasi pengalaman perangkat sejak awal.</p><blockquote class="my-4">"Semuanya dimulai dari memahami bagaimana pelanggan menggunakan HP lipat setiap hari. Masukan tersebut menjadi dasar inovasi material kami, seperti teknologi <strong>Flex Titanium</strong>. Masukan itu juga membimbing desain komponen. Akhirnya, semuanya menghasilkan pengalaman perangkat utuh dan berkembang menjadi tiga portofolio <em>foldable</em> yang berbeda," sebut HS Moon.</blockquote><p>Chon mengatakan banyak perangkat saat ini mulai menghadirkan kemampuan AI, tetapi menurutnya tantangan terbesar bukan sekadar menambahkan fitur baru, melainkan bagaimana membuat AI benar-benar bekerja secara mulus bersama sistem dan layanan yang ada.</p><p>Samsung mendesain ulang platform mereka dari awal, tidak hanya menambahkan fitur di atas sistem operasi (OS) konvensional, melainkan membangun fondasi baru demi performa AI yang lebih andal dan intuitif.</p><p>Baca artikel detikinet selengkapnya di: <a href="https://inet.detik.com/consumer/d-8586469/rahasia-samsung-menang-di-era-smartphone-ai" target="_blank">detikinet - Rahasia Samsung Menang di Era AI</a></p>',
            'view_count' => 0,
        ]);

        \App\Models\News::create([
            'title' => 'Anggur vs Apel, Mana yang Lebih Baik Untuk Gula Darah? Ini Kata Ahli',
            'slug' => \Illuminate\Support\Str::slug('Anggur vs Apel, Mana yang Lebih Baik Untuk Gula Darah? Ini Kata Ahli'),
            'thumbnail' => 'news/anggur-apel.jpg',
            'content' => '<p><strong>Jakarta</strong> - Anggur dan apel mungkin menjadi buah yang umum dinikmati karena enak dan bernutrisi. Namun, dari kedua buah ini, mana yang lebih baik untuk menjaga gula darah tetap stabil?</p><p>Kadar gula darah perlu dijaga agar tetap normal agar tubuh memiliki energi yang cukup dan fungsi organ vital berjalan optimal. Jika dibiarkan terlalu tinggi atau rendah, maka bisa merusak pembuluh darah dan saraf, memicu resistensi insulin, serta meningkatkan risiko komplikasi fatal.</p><h3 class="mt-4">1. Pengaruh makan anggur terhadap gula darah</h3><p>Ahli gizi Juliana Vocca mengungkap jika anggur merupakan buah bergizi yang bisa dinikmati oleh semua orang. Makan buah ini memang bisa meningkatkan kadar gula darah, tetapi jika dikonsumsi dalam porsi sedang dan dipadukan dengan nutrisi lain, anggur dapat aman dimasukkan dalam pola makan bergizi seimbang.</p><p>Anggur punya indeks glikemik rendah hingga sedang yaitu di angka 54. Artinya buah ini dapat meningkatkan gula darah lebih lambat daripada gula olahan, tetapi lebih cepat daripada buah kaya serat, seperti beri.</p><h3 class="mt-4">2. Pengaruh apel terhadap kadar gula darah</h3><p>Ahli menjelaskan jika apel cenderung memiliki dampak glikemik relatif rendah karena kandungan seratnya. Indeks glikemiknya berkisar antara 28 hingga 44.</p><p>Dalam satu buah apel menyediakan sekitar 20 gram karbohidrat dan sekitar 5 gram serat yang membantu memperlambat pencernaan dan mendorong peningkatan gula darah lebih bertahap. Pektin, serat larut pada kulit apel, membantu memperlambat pelepasan glukosa ke dalam aliran darah.</p><blockquote class="my-4">"Jika tujuannya untuk menjaga kadar gula darah tetap stabil, ahli sepakat bahwa apel adalah pilihan yang sedikit lebih baik daripada anggur karena kandungan serat dan airnya yang lebih tinggi."</blockquote>',
            'view_count' => 0,
        ]);
    }
}
