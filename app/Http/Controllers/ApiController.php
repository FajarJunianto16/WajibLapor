<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Masyarakat;
use App\Pengaduan;


class ApiController extends Controller
{
    public function index()
    {
        $pengaduan=Pengaduan::all();
        return response()->json($pengaduan, 200);
    }

    public function getMasyarakat()
    {

        $masyarakat = Masyarakat::all();
        return response()->json($masyarakat, 200);





    }


    public function index1()
    {
        $pengaduan = Pengaduan::all();

        return $this->sendResponse($pengaduan->toArray(), 'peng$pengaduan retrieved successfully.');
    }


    public function store(Request $request)
    {
        $masyarakat = New Masyarakat;
        $masyarakat->nik =$request->nik;
        $masyarakat->nama =$request->nama;
        $masyarakat->username = $request->username;
        $masyarakat->password = $request->password;
        $masyarakat->telp = $request->telp;
        $masyarakat->save();

        return "Data Masyarakat berhasil masuk";
    }
}
