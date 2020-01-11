<?php
use App\Buku;
use Illuminate\Database\Seeder;

class bukuu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = New Buku;
$buku ->judul = 'belajar php 2333 ';
$buku ->jumlah_halaman = 100;
$buku ->penerbit = 'Gramedia';
$buku ->synopsis = 'tentang buku';
$buku ->status = 1;

$buku ->save();

$buku = New Buku;
$buku ->judul = 'belajar php 2334 ';
$buku ->jumlah_halaman = 100;
$buku ->penerbit = 'Gramedia';
$buku ->synopsis = 'tentang buku';
$buku ->status = 1;

$buku ->save();

$buku = New Buku;
$buku ->judul = 'belajar php 2335 ';
$buku ->jumlah_halaman = 100;
$buku ->penerbit = 'Gramedia';
$buku ->synopsis = 'tentang buku';
$buku ->status = 1;

$buku ->save();

$buku = New Buku;
$buku ->judul = 'belajar php 2336 ';
$buku ->jumlah_halaman = 100;
$buku ->penerbit = 'Gramedia';
$buku ->synopsis = 'tentang buku';
$buku ->status = 1;

$buku ->save();


    }
}
