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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("ukuran_id")->constrained("ukurans");
            $table->foreignId("produk_id")->constrained("produks");
            $table->integer("jumlahItem");
            $table->timestamps();
        });
    }

    /* 
    CREATE TABLE keranjangs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    ukuran_id INT,
    produk_id INT,
    jumlahItem INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (ukuran_id) REFERENCES ukurans(id),
    FOREIGN KEY (produk_id) REFERENCES produks(id)
    );
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};