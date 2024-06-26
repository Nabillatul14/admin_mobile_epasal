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
        Schema::create('postfile', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('data_file');
            $table->string("kategori_luar");
            $table->string("kategori_dalam");
            $table->text("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postfile');
    }
};
