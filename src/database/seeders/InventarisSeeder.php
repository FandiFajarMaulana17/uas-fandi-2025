<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventaris;

class InventarisSeeder extends Seeder
{
    public function run(): void
    {
        Inventaris::insert([
            [
                'kode' => 'INV001',
                'nama' => 'Laptop Dell XPS 13',
                'kategori' => 'Komputer',
                'lokasi' => 'Gudang 1',
                'jumlah' => 5,
                'kondisi' => 'Baik',
            ],
            [
                'kode' => 'INV002',
                'nama' => 'Printer Epson L3110',
                'kategori' => 'Peralatan Kantor',
                'lokasi' => 'Gudang 2',
                'jumlah' => 3,
                'kondisi' => 'Baik',
            ],
            [
                'kode' => 'INV003',
                'nama' => 'Proyektor BenQ',
                'kategori' => 'Multimedia',
                'lokasi' => 'Ruang Meeting',
                'jumlah' => 2,
                'kondisi' => 'Rusak Ringan',
            ],
        ]);
    }
}
    