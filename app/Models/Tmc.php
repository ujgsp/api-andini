<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmc extends Model
{
    use HasFactory;

    protected $table = 'tmc_validasi';

    protected $primaryKey = 'no';

    protected $fillable = [
        'id_detek',
        'cctv',
        'tanggal',
        'foto',
        'tempat',
        'penyebab',
        'lat',
        'lng',
        'proses',
        'patroli',
        'maps',
        'folder',
        'p_tiba',
        'p_selesai',
        'foto_penangan',
        'keterangan_penanganan',
        'area',
        'derek',
        'rescue',
        'ambulance'
    ];
}
