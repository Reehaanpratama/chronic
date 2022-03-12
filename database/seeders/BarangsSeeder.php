<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang;
use App\Models\supplier;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //supplier
        $supplier1 = supplier::create(['nama_supplier' => 'Sempiternal']);
        //barang
        $barang1 = barang::create(['nama_barang' => 'long sleeve', 'harga' => '100000', 'stok' => '10',
        'warna' => 'hitam', 'ukuran' => 'L' , 'id_supplier' => $supplier1->id]);
    }
}
