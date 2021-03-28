<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Config;

class Petugas extends  Authenticatable
// class Petugas extends Model
{

    protected $table = "petugas";
    protected $guard = "petugas";
    protected $hidden = ['password'];
    public $timestamps = false;
    protected $fillable = ['nama_petugas','username','password','telp','level'];

    public function tanggapan()
    {
        return $this->hasMany('App\Tanggapan');
    }

    // public function __construct() {
    //     parent::__construct(); // Don't forget this, you'll never know what's being done in the constructor of the parent class you extended
    // }
}
