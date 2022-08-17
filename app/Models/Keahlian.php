<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{
    use HasFactory;

    protected $guarded = ['id_keahlian'];

    protected $fillable = ['id','namakeahlian','keterangan',];

     public function Pegawai(){
        return $this->belongsTo(Pegawai::class);
    }
}
