<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutMe;
use App\Models\Project;
use App\Models\Photo;
use App\Models\Education;
use App\Models\Skill;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutMe::create([
            'name' => 'Ainun Khan',
            'profile_image' => 'profile/ainun.png',
            'description' => "Halo! Saya Ainun Ainun Khan Kholah, seorang programmer yang suka explore hal-hal baru, termasuk web development dan data. Hampir 2 tahun terakhir, saya mengembangkan aplikasi berbasis web, seperti sistem HR, aplikasi billing, dan jurnal akuntansi. Selama pendidikan sarjana, saya juga suka mengikuti pelatihan atau pembelajaran diluar kampus. Dari pengalaman itu, saya jadi makin tertarik mendalami analisis data sekaligus terus mengasah kemampuan membangun aplikasi yang bermanfaat.\n\n\n Di luar dunia coding, akhir-akhir ini saya punya hobi trekking. Setiap naik turun jalur, saya selalu dibuat kagum sama pemandangan alamnya. Dari situ saya mulai suka mengabadikan momen lewat foto-foto alam. Buat saya, fotografi alam itu bukan sekadar dokumentasi perjalanan, tapi juga cara menikmati detail kecil yang sering terlewat. Karena itu, saya sengaja menambahkan koleksi foto hasil trekking di portofolio ini — biar bisa berbagi sedikit keindahan yang saya temukan di setiap langkah. 🌿📸"
        ]);


        Project::create([
            'title' => 'Marketing Incentive Export Tool',
            'description' => 'Membuat modul untuk menghitung dan mengekspor insentif marketing secara otomatis.',
            'features' => json_encode([
                'Perhitungan bonus berdasarkan grade marketing',
                'Insentif tambahan dari jumlah pelanggan loyal aktif',
                'Bonus dari revenue pelanggan loyal aktif',
                'Insentif per pelanggan baru aktif',
                'Bonus milestone bila target tercapai',
                'Export laporan ke Excel'
            ]),
            'technologies' => 'Laravel, MySQL, PhpSpreadsheet',
            'impact' => 'Mengurangi perhitungan manual, mempercepat laporan, meningkatkan akurasi, transparansi tim marketing.',
            'screenshot' => 'projects/marketing-incentive.png',
            'url' => null
        ]);

        Photo::create(['title'=>'Trekking Trijaya','image'=>'photos/trijaya.jpg']);
        Photo::create(['title'=>'Bukit Sanghyangdora','image'=>'photos/sanghyangdora.jpg']);
        Photo::create(['title'=>'Cawene Geulis','image'=>'photos/cawenegeulis.jpg']);

        Education::create([
            'degree'=>'Bachelor of Informatics Engineering',
            'institution'=>'Universitas Muhammadiyah CIrebon',
            'start_year'=>2918,
            'end_year'=>2023,
            'description'=>'Belajar programming, database, dan sistem informasi.'
        ]);

        Skill::create(['name'=>'Laravel']);
        Skill::create(['name'=>'PHP']);
        Skill::create(['name'=>'Livewire']);
        Skill::create(['name'=>'TailwindCSS']);
        Skill::create(['name'=>'MySQL']);
    }
    
}
