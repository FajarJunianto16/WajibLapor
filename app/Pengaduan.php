<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    public function masyarakat()
    {
        return $this->belongsTo('App\Masyarakat');
    }

    public function tanggapan()
    {
       return $this->hasMany('App\Tanggapan');
    }


    protected $table = "pengaduans";
    protected $fillable = ['tanggal_pengaduan','nik','isi_laporan','foto','status'];


}
