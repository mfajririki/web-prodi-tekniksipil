<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisiMisi::insert([
            'visi' => 'Menjadi Program Studi Teknik Sipil unggul dalam pengembangan Ilmu Pengetahuan dan rekayasa sipil berbasis teknologi informasi berstandar Internasional pada tahun 2025',
            'misi' => 'Menyelenggarakan pendidikan yang baik dalam bidang ilmu pengetahuan dan rekayasa sipil melalui pemanfaatan teknologi informasi dan berstandar internasional.
            Mempersiapkan para lulusan untuk memperoleh standar moral dan integritas yang baik, memiliki sikap dan perilaku yang responsif, kooperatif dan kreatif sehingga memiliki keunggulan kompetitif.
            Melakukan kajian hasil riset yang berbasiskan teknologi informasi untuk diaplikasikan bagi kepentingan masyarakat secara professional.
            Membangun kerja sama dengan pemangku kepentingan yang kuat sehingga memudahkan pertukaran ilmu pengetahuan, ketrampilan dan profesionalisme yang saling menguntungkan terutama dalam bidang pengembangan, pendidikan dan pelatihan.
            Melaksanakan pengabdian dengan pengembangan teknologi guna meningkatkan kesejahteraan masyarakat.'
        ]);
    }
}
