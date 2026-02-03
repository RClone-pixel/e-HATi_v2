@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-check mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="#" class="btn btn-sm btn-success">
                <i class="fas fa-user mr-2"></i>
                Check-Up Pegawai
            </a>
        </div>

        <div class="card-body">
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-3 col-lg-4 mb-4 d-flex justify-content-center align-items-start mt-4">
                        <img src="{{ asset('sbadmin2/img/img1.png') }}" alt="Foto Pegawai" class="img-thumbnail shadow-sm"
                            style="height: 348px; aspect-ratio: 3/4; object-fit: cover;">
                    </div>

                    <div class="col-xl-9 col-lg-8 mt-3">
                        <div class="form-group mb-4">
                            <label class="form-label font-weight-bold">
                                Nama :
                            </label>
                            <select class="custom-select" name="nama">
                                <option selected disabled class="text-muted">-- Pilih Pegawai --</option>
                                <option>siapa</option>

                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <label class="font-weight-bold">
                                    Tanggal Lahir
                                </label>
                                <input type="date" class="form-control" name="tanggal_lahir" value="#">
                            </div>

                            <div class="col-md-4 mb-4">
                                <label class="font-weight-bold">
                                    Umur
                                </label>
                                <input type="text" class="form-control" name="umur" value="#">
                            </div>

                            <div class="col-md-4 mb-4">
                                <label class="font-weight-bold">
                                    Golongan Darah
                                </label>
                                <select class="custom-select" name="golongan_darah">
                                    <option selected disabled>-- Pilih Gol. Darah --</option>
                                    <option>O</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>AB</option>
                                    <option>O+</option>
                                    <option>A+</option>
                                    <option>B+</option>
                                    <option>AB+</option>
                                    <option>O-</option>
                                    <option>A-</option>
                                    <option>B-</option>
                                    <option>AB-</option>
                                </select>
                            </div>

                            <div class="col-xl-12 mb-4">
                                <label class="form-label font-weight-bold">
                                    Riwayat Penyakit :
                                </label>
                                <textarea class="form-control" name="riwayat_penyakit" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <hr>
                </div>

                <div>
                    <div class="row mt-5">
                        <div class="col-xl-12 mb-3">
                            <label class="form-label font-weight-bold">
                                Puasa :
                            </label>
                            <select class="custom-select" name="puasa">
                                <option selected disabled class="text-muted">-- Pilih --</option>
                                <option>Tidak</option>
                                <option>Iya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <label class="form-label font-weight-bold">
                                Tinggi Badan (cm) :
                            </label>
                            <input type="number" class="form-control" name="tinggi_badan" value="#">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-2">
                            <label class="form-label font-weight-bold">
                                Berat Badan (kg) :
                            </label>
                            <input type="number" class="form-control" name="berat_badan" value="#">
                        </div>
                    </div>
                </div>


                <div class="mt-4">
                    <hr>
                </div>
                <div class="text-left">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
