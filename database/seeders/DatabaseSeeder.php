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
    }
}
