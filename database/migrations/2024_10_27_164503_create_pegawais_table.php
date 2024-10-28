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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama pegawai
            $table->string('foto')->nullable(); // Foto pegawai (bisa null)
            $table->string('tempat_lahir'); // Tempat lahir pegawai
            $table->date('tanggal_lahir'); // Tanggal lahir pegawai
            $table->string('alamat')->nullable(); // Alamat pegawai (bisa null)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
