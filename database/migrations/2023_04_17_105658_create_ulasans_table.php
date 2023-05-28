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
        Schema::create('ulasans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("produk_id")->constrained("produks");
            $table->string("namaDepan");
            $table->string("judulUlasan");
            $table->longText("ulasan");
            $table->integer("quality");
            $table->integer("value");
            $table->integer("price");
            $table->integer("is_verif");
            $table->timestamps();
        });
    }

    /* 
    CREATE TABLE ulasans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    produk_id INT,
    namaDepan VARCHAR(255) NOT NULL,
    judulUlasan VARCHAR(255) NOT NULL,
    ulasan LONGTEXT NOT NULL,
    quality INT NOT NULL,
    value INT NOT NULL,
    price INT NOT NULL,
    is_verif INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (produk_id) REFERENCES produks(id)
    );
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasans');
    }
};