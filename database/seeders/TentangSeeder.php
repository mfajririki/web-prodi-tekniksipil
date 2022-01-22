<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::insert([
            'konten_tentang' => 'Teknik sipil adalah salah satu cabang ilmu teknik yang mempelajari tentang bagaimana merancang, membangun, merenovasi tidak hanya gedung dan infrastruktur, tetapi juga mencakup lingkungan untuk kemaslahatan hidup manusia.Teknik sipil mempunyai ruang lingkup yang luas.'
        ]);
    }
}
