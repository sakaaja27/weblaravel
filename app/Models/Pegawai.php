<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['nama','jeniskelamin','notelpon','email','tempat','tgl_lahir','alamat','agama','statuspernikahan','pekerjaan','kewarganegaraan',];

     public function Keahlian(){
        return $this->hasMany('App\Models\Keahlian','id','id');
    }
     public function Pendidikan(){
        return $this->hasMany('App\Models\Pendidikan','id','id');
    }
}
