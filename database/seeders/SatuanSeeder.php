<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
        [
            'kode_satuan' => 'STN',
            'nama_satuan' => 'SATUAN'
        ],
        [
            'kode_satuan' => 'SET',
            'nama_satuan' => '1 SET'
        ]
        ]);
    }
}
