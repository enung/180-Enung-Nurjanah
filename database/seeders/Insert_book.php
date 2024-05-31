<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Insert_book extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('book')->insert([
            'tittle' => 'Panduan Shalat',
            'author' => "Drs.Moh Rifa'i",
            'pdf_path' => '/book/panduan_sholat.pdf',
            'publisher'=> 'CV.Toha Putra',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
    }
}
