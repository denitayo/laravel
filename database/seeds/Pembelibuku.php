<?php
use App\Pembelianbuku;
use Illuminate\Database\Seeder;

class Pembelibuku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = New Pembelianbuku;
        $buku ->judul_buku = 'belajar lagi php 5 ';
        $buku ->jenis_buku = 'belajarr';
        $buku ->harga_belieceran= 460000;
        $buku ->harga_beligrosir= 3750000;
        $buku ->save();
    }
}
