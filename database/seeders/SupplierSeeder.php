<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Makmur Jaya', 'supplier_alamat' => 'Jl. Pahlawan No. 1, Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Sumber Rejeki', 'supplier_alamat' => 'Jl. Melati No. 22, Bandung'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP03', 'supplier_nama' => 'Toko Anugerah', 'supplier_alamat' => 'Jl. Sudirman No. 99, Surabaya'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
