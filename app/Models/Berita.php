<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = [];

    //Function untuk menghapus File Thumbnail yang tersimpan padaa Storage Public
    protected static function booted(): void
    {
        self::deleted(function (Berita $dataBerita) {
            Storage::disk('public')->delete($dataBerita->thumbnail_berita);
        });

        // Handle when a record is being updated (e.g., changing the thumbnail image)
        self::updating(function (Berita $dataBerita) {
            // Check if the 'thumbnail_berita' field is being updated
            if ($dataBerita->isDirty('thumbnail_berita')) {
                // Delete the old image
                Storage::disk('public')->delete($dataBerita->getOriginal('thumbnail_berita'));
            }
        });
    }
}
