@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-5 fw-bold">Klinik Kesehatan Bersama</h1>
    <p class="text-muted">Selamat datang di sistem informasi klinik kesehatan. Gunakan menu di bawah ini untuk mengelola data.</p>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-lines-fill display-4 text-primary mb-3"></i>
                <h5 class="card-title">Staf Administrasi</h5>
                <p class="card-text">Kelola data staf administrasi klinik.</p>
                <a href="{{ route('staf_administrasi.index') }}" class="btn btn-outline-primary w-100">Lihat Data</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-circle display-4 text-success mb-3"></i>
                <h5 class="card-title">Akun Pengguna</h5>
                <p class="card-text">Manajemen akun login dan hak akses pengguna.</p>
                <a href="{{ route('akun_pengguna.index') }}" class="btn btn-outline-success w-100">Lihat Data</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-journal-medical display-4 text-danger mb-3"></i>
                <h5 class="card-title">Catatan Medis</h5>
                <p class="card-text">Histori pemeriksaan dan diagnosis pasien.</p>
                <a href="{{ route('catatan_medis.index') }}" class="btn btn-outline-danger w-100">Lihat Data</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-badge display-4 text-warning mb-3"></i>
                <h5 class="card-title">Dokter</h5>
                <p class="card-text">Manajemen data dokter dan spesialisasi.</p>
                <a href="{{ route('dokter.index') }}" class="btn btn-outline-warning w-100">Lihat Data</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill display-4 text-info mb-3"></i>
                <h5 class="card-title">Pasien</h5>
                <p class="card-text">Manajemen data dan informasi pasien.</p>
                <a href="{{ route('pasien.index') }}" class="btn btn-outline-info w-100">Lihat Data</a>
            </div>
        </div>
    </div>
</div>
@endsection