@extends('templates.main')

@section('container')
    <div class="content">
        <div class="row">
            <div class="col-3">
                <div class="card-default d-flex align-items-start justify-content-between">
                    <div class="card-caption">
                        <p class="caption-name">Total Siswa</p>
                        <h4 class="caption-value">{{ $totalSiswa }}</h4>
                    </div>
                    <div class="wrapper-icon d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/dashboard/student.svg') }}" class="img-fluid card-image"
                            alt="Student Icon" width="18">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-default d-flex align-items-start justify-content-between">
                    <div class="card-caption">
                        <p class="caption-name">Total Manajemen</p>
                        <h4 class="caption-value">{{ $totalManajemen }}</h4>
                    </div>
                    <div class="wrapper-icon d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/dashboard/student.svg') }}" class="img-fluid card-image"
                            alt="Student Icon" width="18">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-default d-flex align-items-start justify-content-between">
                    <div class="card-caption">
                        <p class="caption-name">Total Guru</p>
                        <h4 class="caption-value">{{ $totalGuru }}</h4>
                    </div>
                    <div class="wrapper-icon d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/dashboard/student.svg') }}" class="img-fluid card-image"
                            alt="Student Icon" width="18">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card-default d-flex align-items-start justify-content-between">
                    <div class="card-caption">
                        <p class="caption-name">Total Pegawai</p>
                        <h4 class="caption-value">{{ $totalPegawai }}</h4>
                    </div>
                    <div class="wrapper-icon d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/dashboard/student.svg') }}" class="img-fluid card-image"
                            alt="Student Icon" width="18">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
