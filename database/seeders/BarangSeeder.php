<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'B01',
                'nama_barang' => 'ban dunlop',
                'harga_barang' => 100000,
                'deskripsi_barang' => 'ban kuat dan tahan lama',
                'satuan_id' => 4
            ],
            [
                'kode_barang' => 'B02',
                'nama_barang' => 'ban michelin',
                'harga_barang' => 150000,
                'deskripsi_barang' => 'ban kuat dan tahan lama',
                'satuan_id' => 5
            ]
            ]);

    }
}
