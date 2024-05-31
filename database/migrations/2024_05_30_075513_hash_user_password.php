<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Ambil semua pengguna
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            // Hash password pengguna jika belum di-hash
            if (!Hash::needsRehash($user->password)) {
                DB::table('users')
                ->where('id', $user->id)
                ->update(['password' => Hash::make($user->password)]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
