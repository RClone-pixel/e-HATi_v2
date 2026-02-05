<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = array(
            'title'             => 'Data Pegawai',
            'menuPegawai'       => 'active',
            'pegawai'           => Pegawai::
            orderBy('Nama', 'asc')->get(),
        );
        return view('admin.pegawai.index', $data);
    }

        public function create()
    {
        $data = array(
            'title'             => 'Tambah Data Pegawai',
            'menuPegawai'       => 'active',
        );
        return view('admin.pegawai.create', $data);
    }

    public function store(Request $request)
    {

    $request->validate([
        'nama'              => 'required',
        'jenis_kelamin'     => 'required',
        'tanggal_lahir'     => 'required',
        'golongan_darah'    => 'required',
        'riwayat_penyakit'  => 'required',
        'foto'              => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ], [
        'nama.required'             => 'Nama tidak boleh kosong',
        'jenis_kelamin.required'    => 'Jenis Kelamin tidak boleh kosong',
        'tanggal_lahir.required'    => 'Tanggal Lahir tidak boleh kosong',
        'golongan_darah.required'   => 'Golongan Darah harus dipilih',
        'foto.required'             => 'Foto tidak boleh kosong',
        'foto.image'                => 'File harus berupa gambar',
        'foto.mimes'                => 'Format foto harus jpeg, jpg, png',
        'foto.max'                  => 'Ukuran foto maksimal 2MB',
    ]);

    $pegawai = new Pegawai;
    $pegawai->nama              = $request->nama;
    $pegawai->jenis_kelamin     = $request->jenis_kelamin;
    $pegawai->tanggal_lahir     = $request->tanggal_lahir;
    $pegawai->umur              = \Carbon\Carbon::parse($request->tanggal_lahir)->age;
    $pegawai->gol_darah         = $request->golongan_darah;
    $pegawai->riwayat_penyakit  = $request->riwayat_penyakit;

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');

        if ($file->isValid()) {
            $path = $file->store('foto-pegawai');
            $pegawai->foto = $path;
        } else {
            return back()->withErrors(['foto' => 'Gagal mengunggah foto'])->withInput();
        }
    }
    $pegawai->save();

    return redirect()->route('pegawai')->with('success', 'Data berhasil ditambahkan');
    }

    // layout edit Pegawai
            public function edit($id)
    {
        $data = array(
            'title'             => 'Edit Data Pegawai',
            'menuPegawai'       => 'active',
            'pegawai'           => Pegawai::FindOrFail($id),
        );
        return view('admin.pegawai.edit', $data);
    }
    // layout edit Pegawai

    // Update Pegawai
        public function update(Request $request, $id)
    {

    $request->validate([
        'nama'              => 'required',
        'jenis_kelamin'     => 'required',
        'tanggal_lahir'     => 'required',
        'golongan_darah'    => 'required',
        'riwayat_penyakit'  => 'required',
        'foto'              => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ], [
        'nama.required'             => 'Nama tidak boleh kosong',
        'jenis_kelamin.required'    => 'Jenis Kelamin tidak boleh kosong',
        'tanggal_lahir.required'    => 'Tanggal Lahir tidak boleh kosong',
        'golongan_darah.required'   => 'Golongan Darah harus dipilih',
        'foto.required'             => 'Foto tidak boleh kosong',
        'foto.image'                => 'File harus berupa gambar',
        'foto.mimes'                => 'Format foto harus jpeg, jpg, png',
        'foto.max'                  => 'Ukuran foto maksimal 2MB',
    ]);

    $pegawai =Pegawai::FindOrFail($id);
    $pegawai->nama              = $request->nama;
    $pegawai->jenis_kelamin     = $request->jenis_kelamin;
    $pegawai->tanggal_lahir     = $request->tanggal_lahir;
    $pegawai->umur              = \Carbon\Carbon::parse($request->tanggal_lahir)->age;
    $pegawai->gol_darah         = $request->golongan_darah;
    $pegawai->riwayat_penyakit  = $request->riwayat_penyakit;

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');

        if ($file->isValid()) {
            $path = $file->store('foto-pegawai');
            $pegawai->foto = $path;
        } else {
            return back()->withErrors(['foto' => 'Gagal mengunggah foto'])->withInput();
        }
    }
    $pegawai->save();

    return redirect()->route('pegawai')->with('success', 'Data berhasil diedit');
    }
    // Update Pegawai

    // Delete Pegawai
    public function delete($id)
    {
        $pegawai = Pegawai::FindOrFail($id);

        if ($pegawai->foto && Storage::disk('public')->exists($pegawai->foto)) {
        Storage::disk('public')->delete($pegawai->foto);
        }

        $pegawai->delete();

        return redirect()->route('pegawai')->with('success', 'Data berhasil dihapus');
    }
    // Delete Pegawai
}

