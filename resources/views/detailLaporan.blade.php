@extends('layouts.applogin')

@section('content')
<div class="container mt-2">
    <h2 class="text-center">Detail Laporan Masyarakat</h2>
    <div class="row">
        <div class="card card-body shadow mt-3">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                <a href="/laporan_pengaduan">
                    <i class="fas fa-arrow-circle-left fa-2x"></i>
                </a>
                    <h4>Tanggapan</h4>
            </div>
        </div>

            <div class="card-body">
                <h4>{{ @$data_tanggapan->tanggapan }}</h4>
            </div>
        </div>

    </div>


    <div class="row mt-4">
        <div class="card card-body shadow">
            <div class="card-header">
                <div class="d-flex justify-content-between">

                    <h4 class="font-weight-bold text-white bg-warning p-1">

                        @if($detail_laporan->status == "proses")
                        <i class="fas fa-check"></i> Divalidasi
                        @elseif($detail_laporan->status == "selesai")
                        <i class="fas fa-check-circle"></i> Diverifikasi
                        @else
                        belum divalidasi

                        @endif
                    </h4>

               </div>

               <div class="card-body">
                        <h5>  {{ $detail_laporan->tanggal_pengaduan }}  </h5>
                        <h5>{{ $detail_laporan->isi_laporan }}</h5>
                        <h5> <img src="/img/{{ $detail_laporan->foto }}" alt="foto"></h5>
                        <div>
                            {{-- <p class="small"> Diadukan oleh : {{ $data_pengaduan->masyarakat->nama }}</p> --}}
                            {{-- <p class="small">   NIK: {{ $data_pengaduan->masyarakat->nik }}</p> --}}
                        </div>
               </div>
            </div>
                </div>

        </div>


    </div>
@endsection
