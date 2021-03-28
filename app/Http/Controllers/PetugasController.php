<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pengaduan,Masyarakat,Tanggapan};

class PetugasController extends Controller
{
    public function index()
    {
        $data_pengaduan = Pengaduan::get();
        $data_masyarakat = Masyarakat::get();
      return view('petugas.index',compact('data_pengaduan','data_masyarakat'));
    }



    public function tampilPengaduan()
    {
        $data_pengaduan = Pengaduan::with('masyarakat')->get();

        return view('petugas.pengaduan',compact('data_pengaduan'));
    }

    public function detailpengaduan($id)
    {
        $data_pengaduan = Pengaduan::with('masyarakat')->find($id);

        $data_tanggapan = Tanggapan::whereHas('pengaduan',function($query){
            $query->where('pengaduan_id',request()->route('id'));
        })->with('petugas')->first();

        return view('petugas.detailpengaduan',compact('data_pengaduan','data_tanggapan'));
    }
    public function destroypengaduan($id)

    {
        $data_pengaduan = Pengaduan::with('masyarakat')->find($id);
        $data_pengaduan->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function StatusOnChange($id)
    {
        $data_pengaduan = Pengaduan::with('masyarakat')->find($id);
        $data_pengaduan->status = request()->get('status');
        $data_pengaduan->save();
        return redirect()->back();
    }


}
