<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Insert_Questionword extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questionword')->insert([
            'questionword'=> 'apa',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
        DB::table('questionword')->insert([
            'questionword'=> 'siapa',
            'created_at' => now(),
            'updated_at'=> now()
        ]);DB::table('questionword')->insert([
            'questionword'=> 'bagaimana',
            'created_at' => now(),
            'updated_at'=> now()
        ]);DB::table('questionword')->insert([
            'questionword'=> 'mengapa',
            'created_at' => now(),
            'updated_at'=> now()
        ]);DB::table('questionword')->insert([
            'questionword'=> 'kapan',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
        DB::table('questionword')->insert([
            'questionword'=> 'dimana',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
        DB::table('questionword')->insert([
            'questionword'=> 'sebutkan',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
    }
}
