<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = [];


    //Function untuk menghapus File Thumbnail yang tersimpan padaa Storage Public
    protected static function booted(): void
    {
        self::deleted(function (Pegawai $dataGaleri) {
            Storage::disk('public')->delete($dataGaleri->foto);
        });

        // Handle when a record is being updated (e.g., changing the thumbnail image)
        self::updating(function (Pegawai $dataGaleri) {
            // Check if the 'thumbnail_berita' field is being updated
            if ($dataGaleri->isDirty('foto')) {
                // Delete the old image
                Storage::disk('public')->delete($dataGaleri->getOriginal('foto'));
            }
        });
    }
}
