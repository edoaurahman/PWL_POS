<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 10 transaksi penjualan
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'JL001',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'Ani',
                'penjualan_kode' => 'JL002',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'JL003',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Ani',
                'penjualan_kode' => 'JL004',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'JL005',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 1,
                'pembeli' => 'Ani',
                'penjualan_kode' => 'JL006',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'JL007',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 1,
                'pembeli' => 'Ani',
                'penjualan_kode' => 'JL008',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'JL009',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Ani',
                'penjualan_kode' => 'JL010',
                'penjualan_tanggal' => '2024-02-28 14:38:29',
            ]
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
