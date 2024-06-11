<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_permohonan_table.php
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('opd');
            $table->date('tanggal_acara');
            $table->string('tempat_acara');
            $table->time('waktu_acara');
            $table->integer('peserta');
            $table->text('bentuk_dukungan');
            $table->boolean('dukungan_infrastruktur')->default(false);
            $table->string('status')->default('pending');
            $table->string('pdf_path')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan');
    }
};
