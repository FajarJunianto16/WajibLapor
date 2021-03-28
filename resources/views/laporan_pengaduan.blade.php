@extends('layouts.applogin')

@section('content')
<body style="background: -webkit-linear-gradient(left,  rgb(148, 0, 211), rgb(249, 0, 255));">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WajibLapor</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/logout">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
    <h2 class="text-center mt-3" style="color: white;">Laporan Pengaduan Masyarakat</h2>
    <div class="row mt-3">
        <div class="col-md-9 col-xl-12">
            @foreach($data_pengaduan as $pengaduan)
            <a href="laporan_pengaduan/detailLaporan/{{ $pengaduan->id }}">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p>{{ $pengaduan->tanggal_pengaduan }}</p>
                        <p><img src="/img/{{ $pengaduan->foto }}"></p>
                        <p class="font-weight-bold text-white bg-warning p-1">

                            @if($pengaduan->status == "proses")
                            <i class="fas fa-check"></i> Divalidasi
                            @elseif($pengaduan->status == "selesai")
                            <i class="fas fa-check-circle"></i> Diverifikasi
                            @else
                            belum divalidasi

                            @endif
                        </p>

                    </div>
                        <h4>{{ $pengaduan->isi_laporan }}</h4>
                </div>
            </div>
        </a>
            @endforeach

        </div>

    </div>

    </div>
</body>
@endsection

