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
            $table->foreignId("id_produk")->constrained("produks");
            $table->foreignId("id_pesanan")->constrained("pesanans");
            $table->integer('jumlahItem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk__pesanans');
    }
};