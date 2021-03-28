<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = "tanggapans";
    protected $fillable = ['pengaduan_id','tanggal_tanggapan','tanggapan','petugas_id'];

    public function pengaduan()
    {
      return $this->belongsTo('App\Pengaduan');
    }

    public function petugas()
    {
       return $this->belongsTo('App\Petugas');
    }
}
