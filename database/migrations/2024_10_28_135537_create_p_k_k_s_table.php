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
        Schema::create('p_k_k_s', function (Blueprint $table) {
            $table->id();
            $table->text('sejarah_pkk');
            $table->text('program_pokok');
            $table->text('arti_logo');
            $table->text('visi_misi');
            $table->string('struktur_organisasi');
            $table->text('mars_pkk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_k_k_s');
    }
};
