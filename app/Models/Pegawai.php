<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'umur',
        'gol_darah',
        'riwayat_penyakit',
        'foto',
    ];

    protected $hidden = [
        'riwayat_penyakit',
        'foto',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'umur' => 'integer',
        ];
    }
}
