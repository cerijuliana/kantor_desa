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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan, 50');
            $table->string('anggaran, 50');
            $table->integer('bulan');
            $table->year('tahun');
            $table->unsignedBigInteger('pegawai_desa_id');
            $table->foreign('pegawai_desa_id')->references('id')->on('pegawai_desa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
