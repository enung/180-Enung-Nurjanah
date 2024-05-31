<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Insert_answerkey extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('answerkey')->insert([
            'id'=>1,
            'answerkey'=> 'shalat menurut bahasa adalah doa, sedangkan menurut istilah adalah serangkaian kegiatan ibadah khusus atau tertentu yang dimulai dengan takbiratul ikhrom dan diakhiri dengan salam',
            'keyword'=> 'arti maksud definisi erti',
            'categoryid'=>1,
            'questionwordid'=>1,
            'created_at' => now(),
            'updated_at'=> now()
        ]);
    }
}
