<nav class="navbar navbar-expand-lg navbar-light mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/home') }}">Sistem Klinik Kesehatan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('stafadministrasi.index') }}">Staf Administrasi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('akunpengguna.index') }}">Akun Pengguna</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('catatanmedis.index') }}">Catatan Medis</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('dokter.index') }}">Dokter</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pasien.index') }}">Pasien</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
