<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModcelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book_stores')->insert(
[
            [
            'JudulBuku' => 'Tentang Kamu',
            'Harga' => 'Rp125.000,00',
            'Stok' => '80', 
        ],
        [
            'JudulBuku' => 'Matahari',
            'Harga' => 'Rp100.000,00',
            'Stok' => '50', 
        ]
        ]
        );
    }
}
