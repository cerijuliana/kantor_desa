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
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dusun, 30');
            $table->integer('jumlah_kk');
            $table->integer('jumlah_jiwa');
            $table->integer('bulan');
            $table->year('tahun');
            $table->unsignedBigInteger('kantor_desa_id');
            $table->foreign('kantor_desa_id')->references('id')->on('kantor_desa');
            $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penduduk');
    }
};
