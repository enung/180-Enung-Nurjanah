<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Insert_question extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question')->insert([
            'id'=>1,
            'question'=> 'Apa arti shalat?',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
    }
}
