<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\{Pengaduan,Masyarakat,Tanggapan};
use PDF;
use Image;
use File;

class AdminController extends Controller
{
    public function index()
    {
        $data_pengaduan = Pengaduan::get();
        $data_masyarakat = Masyarakat::get();
      return view('admin.index',compact('data_pengaduan','data_masyarakat'));
    }

       public function tampilPengaduan()
    {
        $data_pengaduan = Pengaduan::with('masyarakat')->get();

        return view('admin.pengaduan',compact('data_pengaduan'));
    }
    public function detailpengaduan($id)
    {
        $data_pengaduan = Pengaduan::with('masyarakat')->find($id);
        $data_tanggapan = Tanggapan::whereHas('pengaduan',function($query){
            $query->where('pengaduan_id',request()->route('id'));
        })->with('petugas')->first();

        return view('admin.detailpengaduan',compact('data_pengaduan','data_tanggapan'));
    }

    public function cetakPdf()
    {

        $data_pengaduan = Pengaduan::with('masyarakat')->get();
        $pdf = PDF::loadView('admin.pdf', compact('data_pengaduan'))->setPaper('a4','lanscape');
        return $pdf->stream();

    }

    public function detailpdf($id)
    {
        $data_pengaduan = Pengaduan::with('masyarakat')->find($id);
        $data_tanggapan = Tanggapan::whereHas('pengaduan',function($query){
            $query->where('pengaduan_id',request()->route('id'));
        })->with('petugas')->first();
        $pdf = PDF::loadView('admin.detailpdf', compact('data_pengaduan','data_tanggapan'))->setPaper('a4','lanscape');
        return $pdf->stream();

    }




    }

