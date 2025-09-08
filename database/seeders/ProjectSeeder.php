<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Marketing Incentive Export Tool',
            'description' => 'Membuat modul untuk menghitung dan mengekspor insentif marketing secara otomatis, meningkatkan akurasi dan transparansi.',
            'features' => json_encode([
                'Perhitungan bonus berdasarkan grade marketing',
                'Insentif tambahan dari jumlah pelanggan loyal aktif (tiering point)',
                'Bonus dari revenue pelanggan loyal aktif (tiering point)',
                'Insentif per pelanggan baru aktif setiap periode',
                'Bonus milestone bila mencapai target tertentu',
                'Export laporan insentif ke Excel'
            ]),
            'technologies' => 'Laravel, MySQL, PhpSpreadsheet',
            'impact' => 'Mengurangi perhitungan manual yang kompleks → mempercepat pembuatan laporan, meningkatkan akurasi, dan membantu transparansi insentif untuk tim marketing.',
            'screenshot' => 'projects/marketing-incentive.png',
            'url' => null
        ]);
    }
}
