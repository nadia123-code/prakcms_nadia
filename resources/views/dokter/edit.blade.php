@extends('layouts.app')

@section('content')





    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Edit Dokter</h2>
                    <form method="POST" action="{{ route('dokter.update', $dokter->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $dokter->nama }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Spesialisasi</label>
                            <input type="text" name="spesialisasi" class="form-control" value="{{ $dokter->spesialisasi }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telepon</label>
                            <input type="text" name="no_telepon" class="form-control" value="{{ $dokter->no_telepon }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $dokter->email }}" required>
                        </div>
                        <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Update</button>
                        <a href="{{ route('dokter.index') }}" class="btn btn-secondary ms-2">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
