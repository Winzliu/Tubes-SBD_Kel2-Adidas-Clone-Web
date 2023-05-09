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
            $table->foreignId("pesanan_id")->constrained("pesanans");
            $table->string("nama");
            $table->string("harga");
            $table->string("warna");
            $table->integer('jumlahItem');
            $table->integer('ukuran');
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