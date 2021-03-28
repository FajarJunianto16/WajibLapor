@extends('layouts.appPetugas')

@section('content')

<div class="container-fluid">
    <h2>Detail Pengaduan</h2>
    <div class="row">
        <div class="col">
            <div class="card card-body shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a href="/petugas/pengaduan">
                            <i class="fas fa-arrow-circle-left fa-2x"></i>
                        </a>
                        <h3>{{ $data_pengaduan->status }}</h3>
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


                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('petugas.StatusOnChange',$data_pengaduan->id) }}" method="post">
                                    @csrf
                                    <select name="status" class="form-control w-20"onchange="
                                       javascript:this.form.submit()">
                                        <option value="0" @if ($data_pengaduan->status == 0) selected
                                        @endif>0</option>
                                        <option value="proses" @if ($data_pengaduan->status ==
                                            "proses") selected @endif>Proses</option>
                                        <option value="selesai" @if ($data_pengaduan->status == "selesai") selected
                                            @endif>Selesai</option>
                                    </select>

                                </form>

                                <a href="/petugas/detailpengaduan/{{ $data_pengaduan->id }}/tanggapan" class="btn btn-primary">Tanggapi</a>
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
</div>

@endsection
