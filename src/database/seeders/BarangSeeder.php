<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        Barang::insert([
            [
                'nama' => 'x',
                'kategori' => 'Elektronik',
                'stok' => 10,
                'harga' => 2500000
            ],
            [
                'nama' => 'Kulkas LG 2 Pintu',
                'kategori' => 'Elektronik',
                'stok' => 5,
                'harga' => 3200000
            ],
            [
                'nama' => 'Mesin Cuci Sharp',
                'kategori' => 'Elektronik',
                'stok' => 8,
                'harga' => 1800000
            ],
        ]);
    }
}
