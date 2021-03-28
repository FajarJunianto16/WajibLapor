@extends('layouts.applogin')

@section('content')
<body style="background: -webkit-linear-gradient(left, rgb(148, 0, 211), rgb(249, 0, 255));">
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
                    <div class="card-body">
                        <form action="{{route('petugas.register')}}" method="POST">
                            @csrf
                            <h3 class="text-center">Registrasi Admin</h3>
                            <div class="form-group">
                                <label for="nama_petugas">Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control">
                                @error('nama_petugas')
                                <div class="alert alert-danger p-0">
                                    {{ $message }}
                                </div>

                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                                @error('username')
                                <div class="alert alert-danger p-0">
                                    {{ $message }}
                                </div>

                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                                @error('password')
                                <div class="alert alert-danger p-0">
                                    {{ $message }}
                                </div>

                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telp">Telpon</label>
                                <input type="text" name="telp" class="form-control">

                                @error('telp')
                                <div class="alert alert-danger p-0">
                                    {{ $message }}
                                </div>

                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control" name="level">
                                    <option value="admin">Administrator</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>

                            <div class="form-group">
                               <button class="btn btn-primary form-control" type="submit" >Login</button>
                            </div>
                            <div class="form-group">
                               <a class="btn btn-danger form-control" href="/login">Batal</a>
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
