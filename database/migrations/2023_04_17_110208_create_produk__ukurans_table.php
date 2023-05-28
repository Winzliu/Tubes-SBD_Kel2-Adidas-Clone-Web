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
        Schema::create('produk__ukurans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("produk_id")->constrained("produks");
            $table->foreignId("ukuran_id")->constrained("ukurans");
            $table->integer("stock");
            $table->timestamps();
        });
    }

    /* 
    CREATE TABLE produk_ukurans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produk_id INT,
    ukuran_id INT,
    stock INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (produk_id) REFERENCES produks(id),
    FOREIGN KEY (ukuran_id) REFERENCES ukurans(id)
    );
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk__ukurans');
    }
};