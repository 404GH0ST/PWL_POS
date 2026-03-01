<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;

        for ($transaksi_id = 1; $transaksi_id <= 10; $transaksi_id++) {
            for ($barang_urut = 1; $barang_urut <= 3; $barang_urut++) {
                $barang_id = rand(1, 15); // Ambil barang acak 1-15

                $data[] = [
                    'detail_id' => $detail_id,
                    'penjualan_id' => $transaksi_id,
                    'barang_id' => $barang_id,
                    'harga' => 10000, // Misalkan harga jual barang 10000
                    'jumlah' => rand(1, 5), // Jumlah beli acak 1-5 item
                ];
                $detail_id++;
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
