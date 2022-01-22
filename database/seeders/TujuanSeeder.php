<?php

namespace Database\Seeders;

use App\Models\Tujuans;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tujuans::insert([
            'konten_tujuan' => 'Program studi ini bertujuan menghasilkan lulusan yang berkompeten di bidang rekayasa sipil serta memiliki kemampuan soft skill yang mampu menunjang kompetensi lulusan pada saat meneyelesaikan studinya.'
        ]);
    }
}
