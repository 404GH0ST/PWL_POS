<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $supplier_id = 1;

        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'stok_id' => $i,
                'supplier_id' => $supplier_id,
                'barang_id' => $i,
                'user_id' => 1, // User Admin yang sudah ada di seeder sebelumnya
                'stok_tanggal' => now(),
                'stok_jumlah' => 100, // Semua barang diset jumlah stok awalnya 100
            ];

            // Ganti supplier setiap 5 barang
            if ($i % 5 == 0) {
                $supplier_id++;
            }
        }

        DB::table('t_stok')->insert($data);
    }
}
