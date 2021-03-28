@extends('layouts.applogin')


@section('content')


<body style="background: -webkit-linear-gradient(left,  rgb(148, 0, 211), rgb(249, 0, 255));">
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-12 col-md-12 col-xl-6">
            <div class="card shadow">
                <div class="card-body">
                    {{-- @if($messege = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $messege }}
                        </div>

                    @endif --}}
                    <div class="card header">
                        <h3 class="text-center">Silakan di isi Form Pengaduannya</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{route('masyarakat.pengaduan')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <br>
                            <div class="form-group">
                                <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
                                <input type="date" name="tanggal_pengaduan" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" value="{{Auth()->guard('masyarakat')->user()->nik}}" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="isi_laporan">Isi Laporan</label>
                                <textarea name="isi_laporan" cols="30" rows="10" class="form-control"></textarea>

                            </div>

                            <div class="form-group">
                                <label for="foto">foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>



                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status">
                                    <option value="0">0</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                </select>

                            </div>

                            <div class="form-group">
                               <button class="btn btn-primary form-control" type="submit" >Tambah Pengaduan</button>
                            </div>
                            <div class="form-group">
                               <a class="btn btn-warning form-control" href="/laporan_pengaduan">Laporan Pengaduan</a> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
