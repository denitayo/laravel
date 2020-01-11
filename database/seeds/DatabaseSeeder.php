<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(bukuu::class);
         $this->call(Perpus::class);
         $this->call(Pembelibuku::class);
         $this->call(Penjualbuku::class);
         
    }
}
