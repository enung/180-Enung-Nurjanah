<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('answerkey', function (Blueprint $table) {

            $table->timestamps();
        });

        Schema::table('answerkey', function (Blueprint $table) {
            $table->renameColumn("answerkeyid", "id");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
