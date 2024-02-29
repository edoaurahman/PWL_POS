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
        // 10 barang
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2000,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Mie Sedap Goreng',
                'harga_beli' => 2000,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Aqua 600ml',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Teh Botol 500ml',
                'harga_beli' => 4000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Sapu Lidi',
                'harga_beli' => 5000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Pengki',
                'harga_beli' => 6000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 7000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 8,
                'kategori_id ' => 4,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Lampu LED',
                'harga_beli' => 8000,
                'harga_jual' => 9000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Kaos Oblong',
                'harga_beli' => 9000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 10000,
                'harga_jual' => 11000,
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
