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

                <div class="row-4 mb-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Status Puasa</label>
                        <select class="custom-select" name="puasa" id="puasa">
                            <option value="0">Tidak Puasa</option>
                            <option value="1">Sedang Puasa</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-5 border-right">

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Tinggi Badan (cm)</label>
                            <div class="input-group">
                                <input type="number" class="form-control form-control-lg" name="tinggi_badan"
                                    id="tinggi_badan" placeholder="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Berat Badan (kg)</label>
                            <div class="input-group">
                                <input type="number" class="form-control form-control-lg" name="berat_badan"
                                    id="berat_badan" placeholder="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 d-flex align-items-center justify-content-center">
                        <div id="bmi-card" class="card w-100 h-80 border-0" style="background-color: #f8f9fa;">
                            <div class="card-body text-center d-flex flex-column justify-content-center">

                                <h6 class="text-uppercase text-secondary small font-weight-bold ls-1">Analisa BMI/IMT</h6>

                                <div id="gender-icon" class="my-2" style="font-size: 2rem; color: #e3e6f0;">
                                    <i class="fas fa-venus-mars"></i>
                                </div>

                                <h1 id="bmi-score" class="display-3 font-weight-bold mb-0 text-gray-800">--.--</h1>
                                <span class="small text-muted mb-3">Skor Massa Tubuh</span>

                                <div class="mt-3">
                                    <span id="bmi-status" class="badge badge-secondary px-4 py-2"
                                        style="font-size: 1rem; border-radius: 50px;">
                                        Menunggu Input...
                                    </span>
                                </div>

                            </div>
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
