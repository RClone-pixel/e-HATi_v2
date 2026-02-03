<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama'              => 'Rian Nur',
            'tanggal_lahir'     => '30-03-2007',
            'umur'              => '18',
            'gol_darah'         => 'O',
            'riwayat_penyakit'  => 'Tidak ada',
        ]);
    }
}
