<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ices', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk')->unique();
            $table->string('gambar_produk')->nullable();
            $table->string('nama_produk');
            $table->unsignedBigInteger('satuan_id')->nullable();
            $table->unsignedBigInteger('harga_beli');
            $table->unsignedBigInteger('harga_jual');
            $table->unsignedBigInteger('stok')->default(0);
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ices');
    }
};