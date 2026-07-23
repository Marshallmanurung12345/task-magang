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
            'content' => '<p><strong>Jakarta</strong> - Samsung secara resmi mengklaim bahwa teknologi layar lipat terbarunya yang digunakan pada lini Galaxy Foldable sangat sulit untuk ditiru oleh kompetitor. Berbagai inovasi material dan engsel yang dikembangkan bertahun-tahun menjadi benteng utama kekuatan teknologi mereka.</p><p>Menurut perwakilan Samsung, layar fleksibel ini melalui proses uji ketahanan ekstrem sebelum dilepas ke pasaran untuk memastikan daya tahan jangka panjang. Kompetitor mungkin mencoba membuat bentuk yang mirip, namun presisi dan durabilitas engsel serta perlindungan ultra-thin glass (UTG) milik Galaxy tetap menjadi yang terdepan.</p>',
            'view_count' => 0,
        ]);
    }
}
