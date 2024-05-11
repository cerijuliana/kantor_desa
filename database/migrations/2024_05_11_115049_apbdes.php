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
        Schema::create('apbdes', function (Blueprint $table) {
            $table->id();
            $table->string('nama_APBDes, 100');
            $table->string('anggaran, 50');
            $table->integer('bulan');
            $table->year('tahun');
            $table->unsignedBigInteger('pegawai_desa_id');
            $table->unsignedBigInteger('kantor_desa_id');
            $table->foreign('pegawai_desa_id')->references('id')->on('pegawai_desa');
            $table->foreign('kantor_desa_id')->references('id')->on('kantor_desa');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apbdes');
    }
};
