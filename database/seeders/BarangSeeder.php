<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Biskuit Roma', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG03', 'barang_nama' => 'Taro Snack', 'harga_beli' => 4000, 'harga_jual' => 5000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG05', 'barang_nama' => 'Teh Pucuk', 'harga_beli' => 3000, 'harga_jual' => 4000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG06', 'barang_nama' => 'Kopi Kenangan', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG07', 'barang_nama' => 'Kaos Polos Putih', 'harga_beli' => 30000, 'harga_jual' => 45000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG08', 'barang_nama' => 'Kemeja Flanel', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'BRG09', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG10', 'barang_nama' => 'Mouse Logitech', 'harga_beli' => 60000, 'harga_jual' => 85000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG11', 'barang_nama' => 'Keyboard Rexus', 'harga_beli' => 120000, 'harga_jual' => 150000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG12', 'barang_nama' => 'Flashdisk 32GB', 'harga_beli' => 40000, 'harga_jual' => 60000],
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG13', 'barang_nama' => 'Buku Tulis Sinar Dunia', 'harga_beli' => 3500, 'harga_jual' => 5000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG14', 'barang_nama' => 'Bolpen Kenko', 'harga_beli' => 1500, 'harga_jual' => 2500],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Penggaris Joyko', 'harga_beli' => 2000, 'harga_jual' => 3000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
