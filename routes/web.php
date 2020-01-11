<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Buku;
use App\Perpustakaan;
use App\Pembelianbuku;
use App\Penjualanbuku;

Route::get('/', function () {
    //return ('welcome');
    return Pembelianbuku::all();

});

Route::get('/pesan', function () {
    return ('hayy');
});

Route::get('/variable', function (){
    $data1 = 'ini variable data 1';
    $data2 = 'ini variable data 2';
    $data3 = 'ini variable data 3';
    $data4 = 'ini variable data 4';
    $data5 = 'ini variable data 5';
    
    return $data1 .'<br>'. $data2 .'<br>'. $data3 .'<br>'. $data4 .'<br>'. $data5;
});
    Route::get('angkot/{jurusan}/{jurusan2}/{jurusan3}', function () {
        $jurusan = 'cibaduyut - karangsetra';
        $jurusan2 = 'cibaduyut - palasari';
        $jurusan3 = 'dayeuhkolot - palasari';
        $data = 'angkot jurusan : ';
        return $data .' '. $jurusan .'<br>'. $data .' '. $jurusan2 . '<br>' . $data .' '. $jurusan3; 
    });

    Route::get ('user/{nama}/{alamat}/{nomor}', function ($nama , $alamat , $nomor) {
        return 'hello' . $nama . ' yang beralamat di ' . $alamat . ' dan nomor' .$nomor;

    });


    Route::get ('user/{nama}/{nilaii?}', function ($nama , $nilaii = 'belum mempunyai nilai') {
        if ($nilaii >= 50) {
            $grade = 'a';
        }
        if ($nilaii < 50 && $nilaii >=40) {
            $grade = 'b';
            
        }
        if ($nilaii < 40  && $nilaii >=30) {
            $grade = 'c';
            
        }
        if ($nilaii < 30  && $nilaii >=20) {
            $grade = 'd';
            
        }
        if ($nilaii < 20  && $nilaii >=10) {
            $grade = 'e';
            
        }
    
        return ' nama ' . $nama . ' nilai ' . $nilaii . ' grade ' . $grade;

    });

