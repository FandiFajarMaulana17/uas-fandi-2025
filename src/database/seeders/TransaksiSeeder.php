<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    public function run(): void
    {
        Transaksi::insert([
            [
                'barang_id' => 1,
                'tipe' => 'masuk',
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 2,
                'tipe' => 'keluar',
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 3,
                'tipe' => 'masuk',
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
