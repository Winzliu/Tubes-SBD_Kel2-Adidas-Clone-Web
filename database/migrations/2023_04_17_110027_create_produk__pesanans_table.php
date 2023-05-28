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
        Schema::create('produk__pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("pesanan_id")->constrained("pesanans");
            $table->string("nama");
            $table->string("harga");
            $table->string("warna");
            $table->integer('jumlahItem');
            $table->string('ukuran');
            $table->timestamps();
        });
    }

    /* 
    CREATE TABLE produk_pesanans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pesanan_id INT,
    nama VARCHAR(255) NOT NULL,
    harga VARCHAR(255) NOT NULL,
    warna VARCHAR(255) NOT NULL,
    jumlahItem INT NOT NULL,
    ukuran VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (pesanan_id) REFERENCES pesanans(id)
    );
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk__pesanans');
    }
};