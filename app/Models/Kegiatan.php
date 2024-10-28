<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Accessor for formatted 'tanggal'
    public function getFormattedTanggalAttribute()
    {
        return $this->tanggal ? Carbon::parse($this->tanggal)->translatedFormat('d F Y') : null;
    }

    // Accessor for formatted 'waktu'
    public function getFormattedWaktuAttribute()
    {
        return $this->waktu ? Carbon::createFromFormat('H:i:s', $this->waktu)->format('H:i') . ' Wita' : null;
    }
}
