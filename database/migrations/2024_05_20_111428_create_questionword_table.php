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
        Schema::create('questionword', function (Blueprint $table) {
            $table->id();
            $table->string('questionword');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionword');
    }
};


//alter table add column
/*Schema::table('questionword', function (Blueprint $table) {
           
            $table->timestamps();
        });*/

/*Schema::table('questionword', function (Blueprint $table) {
            $table->renameColumn("filelama", "file baru");
           
        });*/