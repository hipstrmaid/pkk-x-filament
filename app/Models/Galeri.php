<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'gambar' => 'array', // Automatically handles array storage as JSON
    ];

    //Function untuk menghapus File Thumbnail yang tersimpan padaa Storage Public
    protected static function booted(): void
    {
        self::deleted(function (Galeri $dataGaleri) {
            Storage::disk('public')->delete($dataGaleri->gambar);
        });

        // Handle when a record is being updated (e.g., changing the thumbnail image)
        self::updating(function (Berita $dataGaleri) {
            // Check if the 'thumbnail_berita' field is being updated
            if ($dataGaleri->isDirty('gambar')) {
                // Delete the old image
                Storage::disk('public')->delete($dataGaleri->getOriginal('gambar'));
            }
        });
    }
}
