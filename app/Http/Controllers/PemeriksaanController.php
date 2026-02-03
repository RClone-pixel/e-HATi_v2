<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index()
    {
        $data = array(
            'title'             => 'Pemeriksaan',
            'menuPemeriksaan'   => 'active',
        );
        return view('admin.pemeriksaan.index', $data);
    }

//     public function create()
//     {
//         $data = array(
//             'title'             => 'Tambah Data Pemeriksaan',
//             'user'              => PegawaiController::get,
//         );
//         return view('admin.pemeriksaan.create', $data);
//     }
}
