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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->string('judul_galeri');
            $table->string('slug')->unique();  // Slug column for URL-friendly title
            $table->timestamp('tanggal_galeri')->nullable(); // Publish date (optional)
            $table->string('penulis');          // Author's name
            $table->json('gambar');                // Text content for the news
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
