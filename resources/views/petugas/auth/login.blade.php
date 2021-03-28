@extends('layouts.applogin')

@section('content')
<body style="background: -webkit-linear-gradient(left,  rgb(148, 0, 211), rgb(249, 0, 255));">
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-12 col-md-12 col-xl-6 my-5">
            <div class="card shadow my-5">
                <div class="card-body">
                    @if($messege = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $messege }}
                    </div>

                    @endif
                    <div class="card-body">
                        <form action="{{route('petugas.login')}}" method="post">
                            @csrf
                            <h3 class="text-center">Aplikasi Pengaduan Masyarakat</h3>
                            <h5 class="font-weight-bold text-center">Petugas</h5>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                               <button class="btn btn-primary form-control" type="submit" >Login</button>
                            </div>
                            <div class="form-group">
                            <a class="btn btn-danger form-control" href="/">Kembali</a>
                            </div>

                            <div class="form-group text-center">
                                <a class="" href=".././admin/register">Belum punya akun </a>
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
