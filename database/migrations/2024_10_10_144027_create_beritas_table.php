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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul_berita');
            $table->string('slug')->unique();  // Slug column for URL-friendly title
            $table->text('isi_berita');
            $table->string('thumbnail_berita');                // Text content for the news
            $table->string('penulis');          // Author's name
            $table->timestamp('tanggal_publish')->nullable(); // Publish date (optional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
