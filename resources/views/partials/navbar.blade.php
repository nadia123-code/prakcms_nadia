<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png') }}" alt="">
      <span>Medicio</span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ route('staf_administrasi.index') }}">Staf Administrasi</a></li>
        <li><a class="nav-link scrollto" href="{{ route('akun_pengguna.index') }}">Akun Pengguna</a></li>
        <li><a class="nav-link scrollto" href="{{ route('catatan_medis.index') }}">Catatan Medis</a></li>
        <li><a class="nav-link scrollto" href="{{ route('dokter.index') }}">Dokter</a></li>
        <li><a class="nav-link scrollto" href="{{ route('pasien.index') }}">Pasien</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
