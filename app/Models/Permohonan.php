<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'nip', 'opd', 'tanggal_acara', 'tempat_acara', 'waktu_acara', 'peserta', 'bentuk_dukungan', 'dukungan_infrastruktur', 'status', 'pdf_path'
    ];
}
