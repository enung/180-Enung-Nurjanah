<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Insert_basicword extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = base_path('public/katadasar.csv');
        $file = fopen($filePath, 'r');
        $header = fgetcsv($file);

        while ($row = fgetcsv($file)) {
            $data = array_combine($header, $row);

            DB::table('basicword')->insert($data);
        }

        fclose($file);
    }
}
