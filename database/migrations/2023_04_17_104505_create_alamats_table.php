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
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users");
            $table->string("namaDepan");
            $table->string("namaBelakang");
            $table->string("nomorTelepon");
            $table->string("namaJalan");
            $table->string("negara");
            $table->string("provinsi");
            $table->string("kota");
            $table->string("kecamatan");
            $table->string("kelurahan");
            $table->integer("kodePos");
            $table->timestamps();
        });
    }

    /* 
    CREATE TABLE alamats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    namaDepan VARCHAR(255) NOT NULL,
    namaBelakang VARCHAR(255) NOT NULL,
    nomorTelepon VARCHAR(255) NOT NULL,
    namaJalan VARCHAR(255) NOT NULL,
    negara VARCHAR(255) NOT NULL,
    provinsi VARCHAR(255) NOT NULL,
    kota VARCHAR(255) NOT NULL,
    kecamatan VARCHAR(255) NOT NULL,
    kelurahan VARCHAR(255) NOT NULL,
    kodePos INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
    );
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamats');
    }
};