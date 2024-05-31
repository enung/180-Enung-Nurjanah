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
        Schema::create('answerkey', function (Blueprint $table) {
            $table->integer('answerkeyid');
            $table->string('answerkey');
            $table->string('keyword');
            $table->integer('categoryid');
            $table->integer('questionwordid');
            $table->primary('answerkeyid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answerkey');
    }
};
