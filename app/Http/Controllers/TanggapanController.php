<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\{Pengaduan,Masyarakat,Tanggapan};
use Carbon\Carbon;

class TanggapanController extends Controller
{
    public function FormTanggapan($id)
    {
        $detail_pengaduan = Pengaduan::with('masyarakat')->find($id);
       return view('petugas.tanggapan',compact('detail_pengaduan'));
    }

    public function storeTanggapan()
    {
        $data_tanggapan = new Tanggapan();
        $data_tanggapan->tanggal_tanggapan = request()->get('tanggal_tanggapan');
        $data_tanggapan->pengaduan_id = request()->get('pengaduan_id');
        $data_tanggapan->tanggapan = request()->get('tanggapan');
        $data_tanggapan->petugas_id = Auth()->guard('petugas')->user()->id;
        $data_tanggapan->save();
        return redirect()->to('petugas/pengaduan');

    }
}
