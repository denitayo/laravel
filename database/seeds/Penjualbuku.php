<?php
use App\Penjualanbuku;
use Illuminate\Database\Seeder;

class Penjualbuku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = New Penjualanbuku;
        $buku ->judul_buku = 'belajar lagi php 4 ';
        $buku ->jenis_buku = 'belajar';
        $buku ->harga_jualeceran= 430000;
        $buku ->harga_jualgrosir= 320000;
        $buku ->save();
    }
}
