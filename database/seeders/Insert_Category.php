<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Insert_Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('category')->insert([
            'category'=> 'sholat',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
        DB::table('category')->insert([
            'category'=> 'puasa',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
        DB::table('category')->insert([
            'category'=> 'syahadat',
            'created_at' => now(),
            'updated_at'=> now()

        ]);
    }
}
