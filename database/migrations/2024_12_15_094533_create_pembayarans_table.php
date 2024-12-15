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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->integer('id_pembayaran')->primary();
            $table->Integer('id_petugas');
            $table->char('nisn', 10);
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar',8);
            $table->string('tahun_dibayar',8);
            $table->Integer('id_spp');
            $table->integer('jumlah_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
