<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
   /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        // Periksa keberadaan kolom password
        if (!Schema::hasColumn('users', 'password')) {
            Schema::table('users', function (Blueprint $table) {
                // Tambahkan kolom password (hanya jika belum ada)
                $table->string('password');
            });
        }

        // Ambil semua data pengguna
        $users = DB::table('users')->select('id', 'password')->get();

        // Ubah password menjadi hash dan simpan ke kolom password baru
        foreach ($users as $user) {
            $user->password = Hash::make($user->password);
            DB::table('users')->where('id', $user->id)->update(['password' => $user->password]);
        }
    }

    /**
     * Kembalikan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Ubah kembali kolom password menjadi varchar (jika ada)
            if (Schema::hasColumn('users', 'password')) {
                $table->varchar('password');
            }
        });
    }
};
