<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Insert_roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('roles')->insert([
        'id'=>1,
        'role'=> 'Admin',
        'created_at' => now(),
        'updated_at'=> now()
    ]);
   }
}
