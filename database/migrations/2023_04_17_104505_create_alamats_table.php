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
            $table->foreignId("id_user")->constrained("users");
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamats');
    }
};