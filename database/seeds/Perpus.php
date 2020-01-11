<?php
use App\Perpustakaan;
use Illuminate\Database\Seeder;

class Perpus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = New Perpustakaan;
        $buku ->judul_buku = 'belajar lagi php 3 ';
        $buku ->tanggal_pinjam= 02-10-20;
        $buku ->tanggal_kembalikan = 05-10-20;
        $buku ->save();
    }
}
