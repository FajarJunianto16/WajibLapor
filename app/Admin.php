<?php

namespace App;

namespace App;


use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Config;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $table = "petugas";
    protected $guard = "admin";
    protected $hidden = ['password'];
    public $timestamps = false;
    protected $fillable = ['nama_petugas','username','password','telp','level'];


}
