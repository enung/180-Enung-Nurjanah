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
        Schema::create('basicword', function (Blueprint $table) {
            $table->integer('basicwordid');
            $table->string('basicword');
            $table->string('basicwordtype');
            $table->primary('basicwordid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basicword');
    }
};
