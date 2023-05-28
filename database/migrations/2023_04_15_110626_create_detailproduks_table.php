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

    /* 
    CREATE TABLE detailproduks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    deskripsi LONGTEXT NOT NULL,
    subDeskripsi LONGTEXT NOT NULL,
    spesifikasi LONGTEXT NOT NULL,
    pengguna VARCHAR(255) NOT NULL,
    jenis VARCHAR(255) NOT NULL,
    kategori VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailproduks');
    }
};