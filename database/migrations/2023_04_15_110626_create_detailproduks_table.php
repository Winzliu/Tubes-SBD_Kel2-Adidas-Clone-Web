<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detailproduks', function (Blueprint $table) {
            $table->id();
            $table->longText("deskripsi");
            $table->longText("subDeskripsi");
            $table->longText("spesifikasi");
            $table->string("pengguna");
            $table->string("jenis");
            $table->string("kategori");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailproduks');
    }
};