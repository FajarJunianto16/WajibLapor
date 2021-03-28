@extends('layouts.appAdmin')

@section('content')

<div class="container-fluid">
    <h2>Detail Pengaduan</h2>
    <div class="row">
        <div class="col">
            <a href="{{ route('admin.detailpdf',$data_pengaduan->id) }}" class="btn btn-primary mb-4">
                <i class="fas fa-download"></i>unduh laporan
            </a>
            <div class="card card-body shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a href="/admin/pengaduan">
                            <i class="fas fa-arrow-circle-left fa-2x">
                            </i>
                        </a>
                        <h3>{{ $data_pengaduan->status }}</h3>
                   </div>
                </div>


                   <div class="card-body">
                            <h5>  {{ $data_pengaduan->tanggal_pengaduan }}  </h5>
                            <h5>{{ $data_pengaduan->isi_laporan }}</h5>
                            <h5> <img src="/img/{{ $data_pengaduan->foto }}" alt="foto"></h5>

                            <div>
                                {{-- <p class="small"> Diadukan oleh : {{ $data_pengaduan->masyarakat->nama }}</p> --}}
                                {{-- <p class="small">   NIK: {{ $data_pengaduan->masyarakat->nik }}</p> --}}
                            </div>

            </div>
         </div>

                    </div>


                </div>
                    <div class="card card-body shadow mt-4">
                        <div class="card-header">
                            <h2>Tanggapan</h2>


                        </div>

                        <div class="card-body">
                            <h4>{{ @$data_tanggapan->tanggapan }}</h4>
                        </div>
                    </div>


    </div>
</div>

@endsection
