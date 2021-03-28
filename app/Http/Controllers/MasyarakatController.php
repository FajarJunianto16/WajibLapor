<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\{Pengaduan,Masyarakat,Tanggapan,Petugas};
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class MasyarakatController extends Controller
{
    public function index()
    {
       return view('index');
    }

    public function FormPengaduan()
    {
       return view('form-pengaduan');
    }

    public function simpanPengaduan()
    {
        $foto = request()->file('foto');
        $filename = $foto->getClientOriginalName();

        $foto->move(public_path().'/images/',$filename);
        $foto_compress = Image::make(public_path().'/images/'.$filename);
        $foto_compress->fit(240,120);
        $foto_compress->save(public_path('/img/'.$filename));
        unlink(public_path('/images/'.$filename));

        $data_pengaduan = new Pengaduan();
        $data_pengaduan->tanggal_pengaduan = request()->get('tanggal_pengaduan');
        $data_pengaduan->nik = request()->get('nik');
        $data_pengaduan->isi_laporan = request()->get('isi_laporan');
        $data_pengaduan->foto = $filename;
        $data_pengaduan->status = request()->get('status');
        $data_pengaduan->save();
        return redirect()->to('/laporan_pengaduan');






        // $data_pengaduan = Pengaduan::create(request()->all());


    }

    public function laporanku()
    {

        $data_pengaduan = Pengaduan::all();
        // $data_pengaduan = Auth()->guard('masyarakat')->user()->pengaduan;
        return view('laporan_pengaduan',compact('data_pengaduan'));


    }

    public function detailLaporan($id)
    {
        $detail_laporan = Pengaduan::with('masyarakat')->find($id);
        $data_tanggapan = Tanggapan::whereHas('pengaduan',function($query){
            $query->where('pengaduan_id',request()->route('id'));
        })->with('petugas')->first();
        return view('detailLaporan',compact('detail_laporan','data_tanggapan'));
    }



    public function logout()
    {

       Auth()->guard('masyarakat')->logout();
       return redirect()->to('/');

    }

}
