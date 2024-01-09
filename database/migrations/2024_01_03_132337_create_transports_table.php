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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('kategori_id');
            $table->string('transmisi');
            $table->decimal('harga_1_6_hari', 10, 2)->nullable();
            $table->decimal('harga_7_13_hari', 10, 2)->nullable();
            $table->decimal('harga_14_hari', 10, 2)->nullable();
            $table->text('deskripsi_mobil')->nullable();
            $table->string('gambar_mobil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
