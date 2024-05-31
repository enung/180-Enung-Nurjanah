<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminateinsett\Support\Facades\DB;


class Insert_users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
            'id'=>1,
            'name'=> 'Enung Nurjanah',
            'email'=> 'enung@gmail.com',
            'password'=>'password',
            'role'=>1,
            'email_verified_at'=>now(),
            'remember_token'=>'password',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
    }
}
