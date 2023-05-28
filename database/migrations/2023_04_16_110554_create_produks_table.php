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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->foreignId("detailproduk_id")->constrained("detailproduks");
            $table->foreignId("warna_id")->constrained("warnas");
            $table->string("deskripsiWarna");
            $table->string("harga");
            $table->timestamps();
        });
    }

    /* 
    CREATE TABLE produks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    detailproduk_id INT,
    warna_id INT,
    deskripsiWarna VARCHAR(255) NOT NULL,
    harga VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (detailproduk_id) REFERENCES detailproduks(id),
    FOREIGN KEY (warna_id) REFERENCES warnas(id)
    );
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};